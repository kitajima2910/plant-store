<?php

namespace App\Components;

use App\Category;
use Illuminate\Support\Facades\DB;

class DataTree {

    public function __construct()
    {

    }

    public static function getData($data, $parent_id = 0, $level = 0, $select = null) {
        
        $result = [];

        foreach($data as $item) {
            if($item['parent_id'] == $parent_id) {
                $item['level'] = $level;
                if(!empty($select) &&  $item['id'] != 0 && $item['id'] == $select) {
                    $item['select'] = $select;
                }
                $result[] = $item;
                $child = self::getData($data, $item['id'], $level + 1, $select);
                $result = array_merge($result, $child);
            }
        }

        return $result;

    }

}