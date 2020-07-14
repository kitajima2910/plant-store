<?php

namespace App\Components;

use App\Category;

class CategoryRecursive {

    private $htmlOptions;
    private $arrayDeleteID;

    public function __construct()
    {
        $this->htmlOptions = '';
        $this->arrayDeleteID = [];
    }
    
    public function getCategories($parent_id = 0, $subMark = '') {

        $categories = Category::where('parent_id', '=', $parent_id)->get();

        foreach($categories as $category) {
            $this->htmlOptions .= '<option value="' . $category->id . '">' . $subMark . ' ' . $category->name . '</option>';
            $this->getCategories($category->id, $subMark . '--');
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
