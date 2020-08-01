<!-- Single Blog Post Area -->
@foreach ($posts as $post)
    <div class="col-12 col-lg-6">
        <div class="single-blog-post mb-50">
            <div class="post-thumbnail mb-30">
                <a href="{!! route('guest.viewPostDetails', $post->slug) !!}"><img class="thumbnail" src="{!! asset($post->feature_image_path) !!}" alt=""></a>
            </div>
            <div class="post-content">
                <a href="{!! route('guest.viewPostDetails', $post->slug) !!}" class="post-title">
                    <h5>{{$post->name}}</h5>
                </a>
                <div class="post-meta">
                    <a href="javacript:void(0);"><i class="fa fa-clock-o" aria-hidden="true"></i>{{date('d-m-Y', strtotime($post->created_at))}}</a>
                    @foreach ($users as $user)
                        @if ($user->id == $post->user_id)
                            <a href="javacript:void(0);"><i class="fa fa-user" aria-hidden="true"></i>{{$user->name}}</a>
                        @endif
                    @endforeach  
                </div>
                    <p class="post-excerpt">{!! Str::limit($post->content, 200, '...') !!}</p>
            </div>
        </div>
    </div>
@endforeach
<div class="col-4"></div>
<div class="col-4">{{$posts->links()}}</div>