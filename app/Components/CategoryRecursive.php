<?php

namespace App\Components;

use App\Category;

class CategoryRecursive {

    private $htmlOptions;
    private $arrayDeleteID;
    private $data;

    public function __construct()
    {
        $this->htmlOptions = '';
        $this->arrayDeleteID = [];
        $this->data = Category::all();
    }
    
    public function getCategories($parentId = 0, $subMark = '', $select = 0) {

        foreach($this->data as $value) {

            $id = $value->id;
            $name = $value->name;

            if($value->parent_id  == $parentId) {

                if($select != 0 && $id == $select) {
                    $this->htmlOptions .= '<option selected value="' . $id . '">' . $subMark . ' ' . $name . '</option>';
                } else {
                    $this->htmlOptions .= '<option value="' . $id . '">' . $subMark . ' ' . $name . '</option>';
                }
                
                $this->getCategories($id, $subMark . '--');
            }

        }

        return $this->htmlOptions;

    }

    public function deleteCategories($parent_id) {
        $categories = Category::where('parent_id', '=', $parent_id)->get();

        foreach($categories as $category) {
            array_push($this->arrayDeleteID, $category->id);
            $this->deleteCategories($category->id);
        }

        return $this->arrayDeleteID;
    }

}
