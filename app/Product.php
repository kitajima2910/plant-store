<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    // protected $fillable = [
    //     'name', 'slug', 'feature_image_path', 'feature_image_name', 'price', 'sale_price', 'content', 'user_id', 'category_id'
    // ];
    
    protected $guarded = [];

    public function images() {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id')->withTimestamps();
    }

}
