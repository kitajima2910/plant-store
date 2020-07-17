<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'parent_id', 'slug', 'deleted_at'
    ];

    public function childs() {
        return $this->hasMany(Menu::class, 'parent_id', 'id') ;
    }
}
