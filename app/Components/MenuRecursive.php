<?php

namespace App\Components;
use App\Menu;

class MenuRecursive {

    private $arrayDeleteID;

    public function __construct()
    {
        $this->arrayDeleteID = [];
    }

    public function deleteMenu($parent_id) {
        $menus = Menu::where('parent_id', '=', $parent_id)->get();

        foreach($menus as $menu) {
            array_push($this->arrayDeleteID, $menu->id);
            $this->deleteMenu($menu->id);
        }

        return $this->arrayDeleteID;
    }

}
