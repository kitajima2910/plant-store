<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PostController extends Controller
{   
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index(){
        $posts = Post::where('status',1)->orderBy('id', 'desc')->paginate(6);
        $users = User::all();
        return view('pages.guest.post',compact('posts','users'));
    }

    public function viewPostDetails($slug){
        try {
            $users = User::all();
            $post = $this->post->where('slug', $slug)->first();
            return view('pages.guest.post-details', compact('post','users'));
        } catch (\Throwable $th) {
            return redirect()->route('guest.home');
        }
    }
}
