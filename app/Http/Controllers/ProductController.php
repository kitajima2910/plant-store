<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    private $product;
    private $category;
    private $rating;

    public function __construct(Product $product, Category $category, Rating $rating)
    {
        $this->product = $product;
        $this->category = $category;
        $this->rating = $rating;
    }

    public function index() {
            Session::forget('checkout');
            Session::forget('sort-product');
            Session::forget('category-slug');
            $categories = $this->category->where('status', 1)->where('parent_id', 0)->get();
            if(!empty(Session::get('search'))) {
                $sort = Session::get('search');
                $products = $this->product->where('status', 1)->where('name', 'like', '%' . $sort . '%')->paginate(6);
                Session::put('sort-product', $sort);
                Session::forget('search');
                // Ratings
                $productOfCategoryRating = [];
                foreach($products as $item) {
                    $ratingSumTmp = $this->rating->where('product_id', $item['id'])->sum('rating');
                    $ratingCountTmp = $this->rating->where('product_id', $item['id'])->count();
                    $ratingAverageTmp = rand(4, 5);
                    if($ratingCountTmp > 0) {
                        $ratingAverageTmp = $ratingSumTmp / $ratingCountTmp;
                    }
                    $productOfCategoryRating[$item['id']] = $ratingCountTmp . '*' . $ratingAverageTmp . '*' . $item['id'];
                }
                return view('pages.guest.shop', compact('products', 'categories', 'productOfCategoryRating'));
            }
            $products = $this->product->where('status', 1)->orderBy('id')->paginate(6);

            // Ratings
            $productOfCategoryRating = [];
            foreach($products as $item) {
                $ratingSumTmp = $this->rating->where('product_id', $item['id'])->sum('rating');
                $ratingCountTmp = $this->rating->where('product_id', $item['id'])->count();
                $ratingAverageTmp = rand(4, 5);
                if($ratingCountTmp > 0) {
                    $ratingAverageTmp = $ratingSumTmp / $ratingCountTmp;
                }
                $productOfCategoryRating[$item['id']] = $ratingCountTmp . '*' . $ratingAverageTmp . '*' . $item['id'];
            }
            return view('pages.guest.shop', compact('products', 'categories', 'productOfCategoryRating'));         
    }

    public function ajaxIndex(Request $request) {
        
        if($request->ajax()) {

            $sort = !empty(Session::get('sort-product')) && !empty(Session::get('sort-product')) != $request->get('sort') ? Session::get('sort-product') : $request->get('sort');

            if($sort == 'prod-gia-thap-cao') {
                $products = $this->product->where('status', 1)->orderBy('final_price')->paginate(6);
            } else if($sort == 'prod-gia-cao-thap') {
                $products = $this->product->where('status', 1)->orderBy('final_price', 'desc')->paginate(6);
            } else if($sort == 'prod-sale') {
                $products = $this->product->where('status', 1)->where('sale_price', '>', 0)->orderBy('id','desc')->paginate(6);
            } else if($sort == 'prod-hot') {
                $products = $this->product->where('status', 1)->orderBy('id','desc')->paginate(6);
            } else { // Search ajax
                $products = $this->product->where('status', 1)->where('name', 'like', '%' . $sort . '%')->paginate(6);
            }

            // Ratings
            $productOfCategoryRating = [];
            foreach($products as $item) {
                $ratingSumTmp = $this->rating->where('product_id', $item['id'])->sum('rating');
                $ratingCountTmp = $this->rating->where('product_id', $item['id'])->count();
                $ratingAverageTmp = rand(4, 5);
                if($ratingCountTmp > 0) {
                    $ratingAverageTmp = $ratingSumTmp / $ratingCountTmp;
                }
                $productOfCategoryRating[$item['id']] = $ratingCountTmp . '*' . $ratingAverageTmp . '*' . $item['id'];
            }
        
            Session::put('sort-product', $sort);
            $productData = view('ajax.guest.product-data', compact('products', 'productOfCategoryRating'))->render();         
            return response()->json(['productData' => $productData, 'code' => 200], 200);
        }
        
    }

    public function viewProductDetails($slug)
    {

        try {
            $product = $this->product->where('slug', $slug)->first();
            $productImages = $this->product->find($product->id)->productImages()->get();
            $productCategory = $this->product->find($product->id)->category()->get()->toArray()[0];
            $productTags = $this->product->find($product->id)->tags()->get();
            foreach ($productTags as $item) {
                $tagsArr[] = $item->tags_name;
            }
            $tagsStr = join(', ', $tagsArr);
            $productOfCategory = $this->category->where('name', $productCategory['name'])->get();
            $productOfCategory = $this->category->find($productOfCategory[0]->id)->products()->inRandomOrder()->take(4)->get()->toArray();

            // Rating
            $ratingSum = $this->rating->where('product_id', $product->id)->sum('rating');
            $ratingCount = $this->rating->where('product_id', $product->id)->count();
            $ratingAverage = 0;
            if($ratingCount > 0) {
                $ratingAverage = $ratingSum / $ratingCount;
            }
            
            $productOfCategoryRating = [];
            foreach($productOfCategory as $item) {
                $ratingSumTmp = $this->rating->where('product_id', $item['id'])->sum('rating');
                $ratingCountTmp = $this->rating->where('product_id', $item['id'])->count();
                $ratingAverageTmp = rand(4, 5);
                if($ratingCountTmp > 0) {
                    $ratingAverageTmp = $ratingSumTmp / $ratingCountTmp;
                }
                $productOfCategoryRating[$item['id']] = $ratingCountTmp . '*' . $ratingAverageTmp . '*' . $item['id'];
            }

            return view('pages.guest.shop-details', compact('product', 'productImages', 'productCategory', 'tagsStr', 'productOfCategory', 'ratingAverage', 'ratingCount', 'productOfCategoryRating'));
        } catch (\Throwable $th) {
            return redirect()->route('guest.home');
        }
        
    }

    public function viewProduct(Request $request) {
        if($request->ajax()) {
            // dd($request->get('slug'));
            $slug = $request->get('slug');
            Session::forget('category-slug');
            // $categories = $this->category->where('status', 1)->where('parent_id', 0)->get();
            $products = $this->category->where('slug', $slug)->first()->products()->paginate(6);
            // return view('pages.guest.shop', compact('products', 'categories'));

            // Ratings
            $productOfCategoryRating = [];
            foreach($products as $item) {
                $ratingSumTmp = $this->rating->where('product_id', $item['id'])->sum('rating');
                $ratingCountTmp = $this->rating->where('product_id', $item['id'])->count();
                $ratingAverageTmp = rand(4, 5);
                if($ratingCountTmp > 0) {
                    $ratingAverageTmp = $ratingSumTmp / $ratingCountTmp;
                }
                $productOfCategoryRating[$item['id']] = $ratingCountTmp . '*' . $ratingAverageTmp . '*' . $item['id'];
            }
            $productData = view('ajax.guest.product-data', compact('products', 'productOfCategoryRating'))->render();         
            return response()->json(['productData' => $productData, 'code' => 200], 200);
        }
        
    }

    public function ajaxViewProduct(Request $request) {
        
        if($request->ajax()) {
            if(empty(Session::get('category-slug'))) {
                $slug = $request->get('slug');
            } else {
                $slug = Session::get('category-slug');
            }
            Session::put('category-slug', $slug);
            $products = $this->category->where('slug', $slug)->first()->products()->paginate(6);

            // Ratings
            $productOfCategoryRating = [];
            foreach($products as $item) {
                $ratingSumTmp = $this->rating->where('product_id', $item['id'])->sum('rating');
                $ratingCountTmp = $this->rating->where('product_id', $item['id'])->count();
                $ratingAverageTmp = rand(4, 5);
                if($ratingCountTmp > 0) {
                    $ratingAverageTmp = $ratingSumTmp / $ratingCountTmp;
                }
                $productOfCategoryRating[$item['id']] = $ratingCountTmp . '*' . $ratingAverageTmp . '*' . $item['id'];
            }
            $productData = view('ajax.guest.product-data', compact('products', 'productOfCategoryRating'))->render();         
            return response()->json(['productData' => $productData, 'code' => 200], 200);
        }
    }

    public function ajaxRating(Request $request) {
        if($request->ajax()) {

            $userId = $request->get('user_id');
            $productId = $request->get('product_id');

            $userProduct = $this->rating->where('user_id', $userId)->where('product_id', $productId)->count();

            if($userProduct === 0) {
                $this->rating->create([
                    'user_id' => $userId,
                    'product_id' => $productId,
                    'comment' => $request->get('comment'),
                    'rating' => $request->get('rating'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);

                // Rating
                $ratingSum = $this->rating->where('product_id', $productId)->sum('rating');
                $ratingCount = $this->rating->where('product_id', $productId)->count();
                $ratingAverage = 0;
                if($ratingCount > 0) {
                    $ratingAverage = $ratingSum / $ratingCount;
                }

                $viewRatingData = view('ajax.guest.rating-data', compact('ratingAverage', 'ratingCount'))->render();
                return response()->json(['viewRatingData' => $viewRatingData, 'code' => 200], 200);
            } else {
                return response()->json(['code' => 204], 200);
            }
            
        }
    }

}
