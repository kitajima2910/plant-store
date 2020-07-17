<?php

namespace App\Components;

use App\Category;

class CategoryRecursive {

    private $arrayDeleteID;

    public function __construct()
    {
        $this->arrayDeleteID = [];
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
