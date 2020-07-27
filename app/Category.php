<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name', 'parent_id', 'slug', 'status'
    ];
    
    public function childs() {
        return $this->hasMany(Category::class, 'parent_id', 'id') ;
    }

    public function products() {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

}
