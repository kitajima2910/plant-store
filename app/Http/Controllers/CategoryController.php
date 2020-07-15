<?php

namespace App\Http\Controllers;

use App\Category;
use App\Components\CategoryRecursive;
use App\Components\DataTree;
use App\Http\Requests\AdminFromCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private $categoryRecursive;

    public function __construct(CategoryRecursive $categoryRecursive)
    {
        $this->categoryRecursive = $categoryRecursive;
    }

    public function adminIndex() {
        $categories = Category::orderBy('id', 'desc')->paginate('5');
        return view('pages.admin.categories.index', compact('categories'));
    }

    public function adminCreate() {

        $data = Category::get()->toArray();
        $options = DataTree::getData($data);

        return view('pages.admin.categories.create', compact('options'));

    }

    public function adminStore(AdminFromCategory $request) {
        $category = new Category([
            'name' => $request->get('name'),
            'parent_id' => $request->get('parent_id'),
            'slug' => Str::of($request->get('name'))->slug('-')
        ]);
        $category->save();
        return redirect()->route('admin.categories.index');
    }

    public function adminRecover() {
        $categories = DB::table('categories')->whereNotNull('deleted_at')->orderBy('id', 'desc')->paginate('5');
        return view('pages.admin.categories.recover', compact('categories'));
    }

    public function adminDestroy($id) {

        $category = Category::find($id);
        $arrCategoryID = $this->categoryRecursive->deleteCategories($category->id);

        foreach($arrCategoryID as $itemID) {
            Category::find($itemID)->delete();
        }
        $category->delete();

        return redirect()->route('admin.categories.index');
        
    }

    public function adminEdit($id) {

        $category = Category::find($id);
        $data = Category::get()->toArray();
        $options = DataTree::getData($data, 0, 0, $category->parent_id);

        return view('pages.admin.categories.edit', compact('category', 'options'));

    }

    public function adminUpdate(AdminFromCategory $request, $id) {

        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->parent_id = $request->get('parent_id');
        $category->slug = Str::of($request->get('name'))->slug('-');
        $category->save();

        return redirect()->route('admin.categories.index');

    }

    public function adminEnable($id) {

        DB::table('categories')->where('id', '=', $id)->update(['deleted_at' => null]);

        return redirect()->route('admin.categories.index');

    }

}
