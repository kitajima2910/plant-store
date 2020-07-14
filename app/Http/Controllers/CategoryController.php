<?php

namespace App\Http\Controllers;

use App\Category;
use App\Components\CategoryRecursive;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private $categoryRecursive;

    public function __construct(CategoryRecursive $categoryRecursive)
    {
        $this->categoryRecursive = $categoryRecursive;
    }

    public function adminIndex(){
        $categories = Category::orderBy('id', 'desc')->paginate('5');
        return view('pages.admin.categories.index', compact('categories'));
    }

    public function adminAdd(){
        $htmlOptions = $this->categoryRecursive->getCategories();
        return view('pages.admin.categories.add', compact('htmlOptions'));
    }

    public function adminStore(Request $request) {
        $category = new Category([
            'name' => $request->get('name'),
            'parent_id' => $request->get('parent_id'),
            'slug' => Str::of($request->get('name'))->slug('-')
        ]);
        $category->save();
        return redirect()->route('admin.categories.index');
    }

    public function adminRecover(){
        return view('pages.admin.categories.recover');
    }

    public function adminDestroy($id) {
        $category = Category::find($id);
        $categories = Category::all();
        foreach($categories as $item) {
            if($category->id === $item->parent_id) {
                $item->delete();
            }
        }
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', $category->name . ' đã được xoá khỏi danh sách');
    }
}
