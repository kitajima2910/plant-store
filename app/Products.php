<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'price', 'feature_image', 'content', 'user_id', 'category_id'
    ];

    public function comment(){
        return $this->belongsTo('categories','category_id','id');
    }
}
