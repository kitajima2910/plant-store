<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Components\CommentRecursive;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    private $commentRecursive;

    public function __construct(CommentRecursive $commentRecursive)
    {
        $this->commentRecursive = $commentRecursive;
    }


    public function index(){
        $comments = Comment::all();
        return view('pages.admin.comments.index', compact('comments'));
    }

    public function destroy(Comment $comment) {

        $arrCommentID = $this->commentRecursive->deleteComment($comment->id);

        foreach($arrCommentID as $itemID) {
            Comment::find($itemID)->delete();
        }
        $comment->delete();

        return redirect()->back();

    }
}
