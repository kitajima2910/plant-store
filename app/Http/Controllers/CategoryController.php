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
        return view('pages.admin.categories.index');
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
}
