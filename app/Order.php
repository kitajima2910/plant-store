<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function orderDetails() {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
}
