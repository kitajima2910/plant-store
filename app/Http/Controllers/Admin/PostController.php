<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminFormPost;
use App\Post;
use App\Traits\StorageImageTraits;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    
    use StorageImageTraits;
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
     
    }

    public function index(){
        $posts  = Post::all();
       return view('pages.admin.posts.index',compact('posts')); 
    }

    public function create(){
        return view('pages.admin.posts.create');
    }

    public function store(AdminFormPost $request){
        $postInsert = [
            'name' => $request->get('name'),
            'slug' => Str::of($request->get('name'))->slug('-'),
            'content' => $request->get('content'),
            'user_id' => Auth::user()->id,
            'status' => $request->get('status'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];


            $data = $this->uploadTrait($request, 'feature_image_path', 'posts');

            if (!empty($data)) {
                $postInsert['feature_image_name'] = $data['file_name'];
                $postInsert['feature_image_path'] = $data['file_path'];
            }
   
            $post = $this->post->create($postInsert);
        
            return redirect()->route('posts.index');
       
    }

    public function destroy($id) {
        $post = $this->post->find($id);
        $pathDelete[] = $post->feature_image_path;
    

        if (!empty($pathDelete)) {
            foreach ($pathDelete as $item) {
                $this->unlinkImages($item);
            }
        }
        $this->post->find($id)->delete();
        return redirect()->back();
    }

    public function edit(Post $post){
        return view('pages.admin.posts.edit',compact('post'));
    }

    public function update(AdminFormPost $request,$id){
        $postInsert = [
            'name' => $request->get('name'),
            'slug' => Str::of($request->get('name'))->slug('-'),
            'content' => $request->get('content'),
            'user_id' => Auth::user()->id,
            'status' => $request->get('status'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        $savePath1 = $this->post->find($id)->feature_image_path;

        
        $data = $this->uploadTrait($request, 'feature_image_path', 'posts');

        if (!empty($data)) {
            $postInsert['feature_image_name'] = $data['file_name'];
            $postInsert['feature_image_path'] = $data['file_path'];
        }
        
    

        $this->post->find($id)->update($postInsert);
        $savePath2 = $this->post->find($id)->feature_image_path;

        if($savePath2 !== $savePath1) {
            $this->unlinkImages($savePath1);
        }

        return redirect()->route('posts.index');
    
    }
}
