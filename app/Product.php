<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    protected $fillable = [
        'name', 'slug', 'feature_image', 'price', 'sale_price', 'content', 'user_id', 'category_id'
    ];
    
}
