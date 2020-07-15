<?php

namespace App\Components;
use App\Menu;

class MenuRecursive {

    private $htmlOptions;
    private $arrayDeleteID;
    private $data;

    public function __construct()
    {
        $this->htmlOptions = '';
        $this->arrayDeleteID = [];
        $this->data = Menu::all();
    }
    
    public function getMenu($parentId = 0, $subMark = '', $select = 0) {

        foreach($this->data as $value) {

            $id = $value->id;
            $name = $value->name;

            if($value->parent_id  == $parentId) {

                if($select != 0 && $id == $select) {
                    $this->htmlOptions .= '<option selected value="' . $id . '">' . $subMark . ' ' . $name . '</option>';
                } else {
                    $this->htmlOptions .= '<option value="' . $id . '">' . $subMark . ' ' . $name . '</option>';
                }
                
                $this->getMenu($id, $subMark . '--');
            }

        }

        return $this->htmlOptions;

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
