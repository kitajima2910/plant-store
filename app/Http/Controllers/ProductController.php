<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    private $category;

    public function __construct(Product $product, Category $category)
    {
        $this->product = $product;
        $this->category = $category;
    }

    public function viewProductDetails($slug) {

        $product = $this->product->where('slug', $slug)->first();
        $productImages = $this->product->find($product->id)->productImages()->get();
        $productCategory = $this->product->find($product->id)->category()->get()->toArray()[0];
        $productTags = $this->product->find($product->id)->tags()->get();
        foreach($productTags as $item) {
            $tagsArr[] = $item->tags_name;
        }
        $tagsStr = join(', ', $tagsArr);
        $productOfCategory = $this->category->where('name', $productCategory['name'])->get();
        $productOfCategory = $this->category->find($productOfCategory[0]->id)->products()->inRandomOrder()->take(4)->get()->toArray();

        return view('pages.guest.shop-details', compact('product', 'productImages', 'productCategory', 'tagsStr', 'productOfCategory'));
    }
}
