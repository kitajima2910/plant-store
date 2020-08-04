<h4 class="headline">{!! $commentsCount !!} bình luận</h4>

<ol>
    @foreach ($comments as $comment)
        <li class="single_comment_area">
            <div class="comment-wrapper d-flex">
                <!-- Comment Meta -->
                <div class="comment-author">
                    <img src="{{ asset("public/uploads/70x70.png")}}" width="70px" height="70px">
                </div>
                <!-- Comment Content -->
                <div class="comment-content">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5>{!! $comment->user()->get('name')[0]->name !!}</h5>
                        <span class="comment-date">{!! $comment->created_at !!}</span>
                    </div>
                    <p>{!! $comment->body !!}</p>
                    <a class="active reply" data-parentid="{!! $comment->id !!}" href="javascript:void(0);">Trả lời</a>
                </div>
            </div>
            @if(count($comment->childs))
                @include('includes.guest.manage-comment-child', ['childs' => $comment->childs])
            @endif
        </li>
    @endforeach
</ol>

