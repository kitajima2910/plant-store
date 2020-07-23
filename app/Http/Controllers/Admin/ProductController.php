<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Components\DataTree;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminFromProduct;
use App\Product;
use App\ProductImage;
use App\ProductTag;
use App\Tag;
use App\Traits\StorageImageTraits;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use StorageImageTraits;

    private $product;
    private $productImage;
    private $tag;
    private $productTag;

    public function __construct(Product $product, ProductImage $productImage, Tag $tag, ProductTag $productTag)
    {
        $this->product = $product;
        $this->productImage = $productImage;
        $this->tag = $tag;
        $this->productTag = $productTag;
    }

    public function index()
    {
        $products = $this->product->get();
        return view('pages.admin.products.index', compact('products'));
    }

    public function create()
    {
        $data = Category::get()->toArray();
        $options = DataTree::getData($data);
        return view('pages.admin.products.create', compact('options'));
    }

    public function store(AdminFromProduct $request)
    {

        try {
            DB::beginTransaction();
            // Thêm sản phẩm vào bản products
            $productInsert = [
                'name' => $request->get('name'),
                'slug' => Str::of($request->get('name'))->slug('-'),
                'price' => $request->get('price'),
                'sale_price' => $request->get('sale_price'),
                'content' => $request->get('content'),
                'user_id' => Auth::user()->id,
                'category_id' => $request->get('category_id'),
                'status' => $request->get('status'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            $data = $this->uploadTrait($request, 'feature_image_path', 'products');

            if (!empty($data)) {
                $productInsert['feature_image_name'] = $data['file_name'];
                $productInsert['feature_image_path'] = $data['file_path'];
            }

            $product = $this->product->create($productInsert);

            // Thêm sản phẩm vào bản product_images
            if ($request->hasFile('image_path')) {

                $imagePath = $request->image_path;

                foreach ($imagePath as $item) {
                    $dataImage = $this->uploadMultipleTrait($item, 'products');
                    $product->images()->create([
                        'image_path' => $dataImage['file_path'],
                        'image_name' => $dataImage['file_name'],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);
                }
            }

            // Thêm sản phẩm vào bản tags
            if (!empty($request->tags_name)) {
                $tagsName = $request->tags_name;

                foreach ($tagsName as $item) {
                    $tag = $this->tag->firstOrCreate(['tags_name' => $item]);
                    $tagIds[] = $tag->id;
                }

                $product->tags()->attach($tagIds);
            }
            DB::commit();
            return redirect()->route('products.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Message: ' . $th->getMessage() . ' Line: ' . $th->getLine());
        }
    }

    public function edit(Product $product)
    {
        $data = Category::get()->toArray();
        $options = DataTree::getData($data, 0, 0, $product->category_id);
        return view('pages.admin.products.edit', compact('product', 'options'));
    }

    public function update(AdminFromProduct $request, $id)
    {

        try {
            DB::beginTransaction();
            // Thêm sản phẩm vào bản products
            $productUpdate = [
                'name' => $request->get('name'),
                'slug' => Str::of($request->get('name'))->slug('-'),
                'price' => $request->get('price'),
                'sale_price' => $request->get('sale_price'),
                'content' => $request->get('content'),
                'user_id' => Auth::user()->id,
                'category_id' => $request->get('category_id'),
                'status' => $request->get('status'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            $savePath1 = $this->product->find($id)->feature_image_path;

            $data = $this->uploadTrait($request, 'feature_image_path', 'products');

            if (!empty($data)) {
                $productUpdate['feature_image_name'] = $data['file_name'];
                $productUpdate['feature_image_path'] = $data['file_path'];
            }
            
            $this->product->find($id)->update($productUpdate);
            $product =  $this->product->find($id);
            $savePath2 = $this->product->find($id)->feature_image_path;

            // Thêm sản phẩm vào bản product_images
            if ($request->hasFile('image_path')) {

                $paths = $this->productImage->where('product_id', $id)->get('image_path');
                foreach ($paths as $imgPath) {
                    $pathDelete[] = $imgPath->image_path;
                }
                $this->productImage->where('product_id', $id)->delete();

                $imagePath = $request->image_path;

                foreach ($imagePath as $item) {
                    $dataImage = $this->uploadMultipleTrait($item, 'products');
                    $product->images()->create([
                        'image_path' => $dataImage['file_path'],
                        'image_name' => $dataImage['file_name'],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);
                }

                // Xoá các file ảnh
                if (!empty($pathDelete)) {
                    foreach ($pathDelete as $item) {
                        $this->unlinkImages($item);
                    }
                }
            }

            // Thêm sản phẩm vào bản tags
            if (!empty($request->tags_name)) {
                $tagsName = $request->tags_name;

                foreach ($tagsName as $item) {
                    $tag = $this->tag->firstOrCreate(['tags_name' => $item]);
                    $tagIds[] = $tag->id;
                }

                $product->tags()->sync($tagIds);
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Message: ' . $th->getMessage() . ' Line: ' . $th->getLine());
            return redirect()->back();
        }

        if($savePath2 !== $savePath1) {
            $this->unlinkImages($savePath1);
        }

        return redirect()->route('products.index');
    }
}
