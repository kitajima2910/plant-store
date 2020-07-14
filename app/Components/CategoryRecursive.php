<?php

namespace App\Components;

use App\Category;

class CategoryRecursive {

    private $htmlOptions;

    public function __construct()
    {
        $this->htmlOptions = '';
    }
    
    public function getCategories($parent_id = 0, $subMark = '') {

        $categories = Category::where('parent_id', '=', $parent_id)->get();

        foreach($categories as $category) {
            $this->htmlOptions .= '<option value="' . $category->id . '">' . $subMark . ' ' . $category->name . '</option>';
            $this->getCategories($category->id, $subMark . '--');
        }

        return $this->htmlOptions;

    }

}
