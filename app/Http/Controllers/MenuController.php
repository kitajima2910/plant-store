<?php

namespace App\Http\Controllers;
use App\Components\MenuRecursive;
use App\Http\Requests\AdminFormMenu;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    private $menuRecursive;

    public function __construct(MenuRecursive $menuRecursive)
    {
        $this->menuRecursive = $menuRecursive;
    }

    public function adminIndex(){
        $menus = Menu::orderBy('id', 'desc')->paginate('5');
        return view('pages.admin.menu.index', compact('menus'));
    }

    public function adminCreate(){
        $htmlOptions = $this->menuRecursive->getMenu();
        return view('pages.admin.menu.create', compact('htmlOptions'));
    }

    public function adminRecover(){
        $menus = DB::table('menus')->whereNotNull('deleted_at')->orderBy('id', 'desc')->paginate('5');
        return view('pages.admin.menu.recover', compact('menus'));
    }

    public function adminDestroy($id){
        $menu = Menu::find($id);
        $arrMenuID = $this->menuRecursive->deleteMenu($menu->id);

        foreach($arrMenuID as $itemID) {
            Menu::find($itemID)->delete();
        }
        $menu->delete();
        return redirect()->route('admin.menu.index');
    }

    public function adminEnable($id) {

        DB  ::table('menus')->where('id', '=', $id)->update(['deleted_at' => null]);

        return redirect()->route('admin.menu.index');

    }

    public function adminStore(AdminFormMenu $request) {
        $menu = new Menu([
            'name' => $request->get('name'),
            'parent_id' => $request->get('parent_id'),
            'slug' => Str::of($request->get('name'))->slug('-')
        ]);
        $menu->save();
        return redirect()->route('admin.menu.index');
    }

    public function adminEdit($id) {
        $menu = Menu::find($id);
        $htmlOptions = $this->menuRecursive->getMenu(0, '', $menu->parent_id);
        return view('pages.admin.menu.edit', compact('menu', 'htmlOptions'));
    }

    public function adminUpdate(AdminFormMenu $request, $id) {

        $menu = Menu::find($id);
        $menu->name = $request->get('name');
        $menu->parent_id = $request->get('parent_id');
        $menu->slug = Str::of($request->get('name'))->slug('-');
        $menu->save();

        return redirect()->route('admin.menu.index');

    }
    
}
