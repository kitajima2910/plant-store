<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Components\CategoryRecursive;
use App\Components\DataTree;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminFormCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private $categoryRecursive;

    public function __construct(CategoryRecursive $categoryRecursive) {
        $this->categoryRecursive = $categoryRecursive;
    }

    public function index() {
        $categories = Category::all();
        return view('pages.admin.categories.index', compact('categories'));
    }

    public function create() {
        $data = Category::get()->toArray();
        $options = DataTree::getData($data);
        return view('pages.admin.categories.create', compact('options'));
    }

    public function store(AdminFormCategory $request) {
        
        $category = new Category([
            'name' => $request->get('name'),
            'parent_id' => $request->get('parent_id'),
            'slug' => Str::of($request->get('name'))->slug('-'),
            'status' => $request->get('status')
        ]);
        $category->save();

        return redirect()->route('categories.index');

    }

    public function edit(Category $category) {
        $data = Category::get()->toArray();
        $options = DataTree::getData($data, 0, 0, $category->parent_id);
        return view('pages.admin.categories.edit', compact('category', 'options'));
    }

    public function update(AdminFormCategory $request, $id) {

        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->parent_id = $request->get('parent_id');
        $category->slug = Str::of($request->get('name'))->slug('-');
        $category->status = $request->get('status');
        $category->save();

        return redirect()->route('categories.index');
    }

    public function destroy(Category $category) {

        $arrCategoryID = $this->categoryRecursive->deleteCategories($category->id);

        foreach($arrCategoryID as $itemID) {
            Category::find($itemID)->delete();
        }
        $category->delete();

        return redirect()->back();

    }

}
