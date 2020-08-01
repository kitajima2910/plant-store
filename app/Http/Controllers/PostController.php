<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PostController extends Controller
{   
    private $post;
    private $user;

    public function __construct(Post $post, User $user)
    {
        $this->post = $post;
        $this->user = $user;
    }

    public function index(){
        $posts = $this->post->where('status',1)->orderBy('id', 'desc')->paginate(6);
        $users = $this->user->all();
        return view('pages.guest.post', compact('posts', 'users'));
    }

    public function viewPostDetails($slug){
        try {
            $users = $this->user->all();
            $post = $this->post->where('slug', $slug)->first();
            return view('pages.guest.post-details', compact('post', 'users'));
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
