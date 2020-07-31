<section class="alazea-blog-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Bài viết mới</h2>
                    <p>Thường xuyên theo dõi để cập nhật những bài viết mới nhất</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            @foreach ($posts as $post)         
            <!-- Single Blog Post Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-post mb-100">
                    <div class="post-thumbnail mb-30">
                        <a  href="{!! route('guest.viewPostDetails', $post->slug) !!}"><img style="width: 350px; height: 255px" src="{{ asset($post->feature_image_path) }}"></a>
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
                        <p class="post-excerpt">{!! substr($post->content,0,160) .'...' !!}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>