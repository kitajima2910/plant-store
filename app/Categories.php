<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;
     
    protected $fillable = [
        'id', 'name' ,'parent_id', 'slug'
    ];

    public function comment(){
        return $this->hasMany('products','category_id','id');
    }
}
