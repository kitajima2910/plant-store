<?php

namespace App\Http\Controllers\Admin;

use App\Components\DataTree;
use App\Components\MenuRecursive;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminFormMenu;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    private $menuRecursive;

    public function __construct(MenuRecursive $menuRecursive)
    {
        $this->menuRecursive = $menuRecursive;
    }

    public function index() {
        $menus = Menu::all();
        return view('pages.admin.menus.index', compact('menus'));
    }

    public function create() {
        $data = Menu::get()->toArray();
        $options = DataTree::getData($data);
        return view('pages.admin.menus.create', compact('options'));
    }

    public function store(AdminFormMenu $request) {
        
        $menu = new Menu([
            'name' => Str::upper($request->get('name')),
            'parent_id' => $request->get('parent_id'),
            'slug' => Str::of($request->get('name'))->slug('-'),
            'status' => $request->get('status')
        ]);
        $menu->save();

        return redirect()->route('menus.index');

    }

    public function edit(Menu $menu) {
        $data = Menu::get()->toArray();
        $options = DataTree::getData($data, 0, 0, $menu->parent_id);
        return view('pages.admin.menus.edit', compact('menu', 'options'));
    }
    
    public function update(AdminFormMenu $request, $id) {

        $menu = Menu::find($id);
        $menu->name = Str::upper($request->get('name'));
        $menu->parent_id = $request->get('parent_id');
        $menu->slug = Str::of($request->get('name'))->slug('-');
        $menu->status = $request->get('status');
        $menu->save();

        return redirect()->route('menus.index');
        
    }

    public function destroy(Menu $menu) {

        $arrCategoryID = $this->menuRecursive->deleteMenu($menu->id);

        foreach($arrCategoryID as $itemID) {
            Menu::find($itemID)->delete();
        }
        $menu->delete();

        return redirect()->back();

    }

}
