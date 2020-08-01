<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name', 'parent_id', 'slug', 'status'
    ];

    public function childs() {
        return $this->hasMany(Menu::class, 'parent_id', 'id')->where('status', 1);
    }
}
