<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class PostController extends Controller
{   
    private $post;
    private $user;
    private $comment;

    public function __construct(Post $post, User $user, Comment $comment)
    {
        $this->post = $post;
        $this->user = $user;
        $this->comment = $comment;
    }

    public function index(){
        Session::forget('checkout');
        $posts = $this->post->where('status',1)->orderBy('id', 'desc')->paginate(6);
        $users = $this->user->all();
        return view('pages.guest.post', compact('posts', 'users'));
    }

    public function viewPostDetails($slug){
        try {
            $users = $this->user->all();
            $post = $this->post->where('slug', $slug)->first();
            $comments = $this->post->find($post->id)->comments()->where('parent_id', '=', 0)->get();
            $commentsCount = $this->post->find($post->id)->comments()->count();
            return view('pages.guest.post-details', compact('post', 'users', 'comments', 'commentsCount'));
        } catch (\Throwable $th) {
            return redirect()->route('guest.home');
        }
    }

    public function ajaxIndex(){
        $posts = $this->post->where('status',1)->orderBy('id', 'desc')->paginate(6);
        $users = $this->user->all();
        return view('ajax.guest.post-data', compact('posts', 'users'))->render();
    }
}
