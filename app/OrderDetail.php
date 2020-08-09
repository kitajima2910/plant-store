<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{

    protected $table = 'order_details';

    protected $guarded = [];

    public function products() {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
