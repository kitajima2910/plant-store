<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function childs() {
        return $this->hasMany(Comment::class, 'parent_id', 'id');
    }

    public function post() {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

}
