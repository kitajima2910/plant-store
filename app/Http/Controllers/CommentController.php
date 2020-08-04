<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CommentController extends Controller
{
    private $comment;

    public function __construct(Comment $comment)
    {
        $this->middleware('customers');
        $this->comment = $comment;
    }

    public function store(Request $request)
    {
        if($request->ajax()) {

            $this->comment->insert([
                'user_id' => $request->get('user_id'),
                'post_id' => $request->get('post_id'),
                'parent_id' => $request->get('parent_id'),
                'body' => $request->get('body'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            
            $postId = $request->get('post_id');
            $comments = $this->comment->where('post_id', '=', $postId)->where('parent_id', '=', 0)->get();
            $commentsCount = $this->comment->where('post_id', '=', $postId)->count();
            
            $viewComments = view('ajax.guest.comments-data', compact('comments', 'commentsCount'))->render();
            return response()->json(['viewComments' => $viewComments, 'code' => 200], 200);
        }

    }
}
