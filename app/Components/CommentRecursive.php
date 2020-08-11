<?php
namespace App\Components;

use App\Comment;

class CommentRecursive {

    private $arrayDeleteID;

    public function __construct()
    {
        $this->arrayDeleteID = [];
    }

    public function deleteComment($parent_id) {
        $comments = Comment::where('parent_id', '=', $parent_id)->get();

        foreach($comments as $comment) {
            array_push($this->arrayDeleteID, $comment->id);
            $this->deleteComment($comment->id);
        }

        return $this->arrayDeleteID;
    }

}
