<ol class="children">
    @foreach($childs as $child)
        <li class="single_comment_area">
            <div class="comment-wrapper d-flex">
                <!-- Comment Meta -->
                <div class="comment-author">
                    <img src="{{ asset("public/uploads/70x70.png") }}" width="70px" height="70px">
                </div>
                <!-- Comment Content -->
                <div class="comment-content">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5>{!! $child->user()->get('name')[0]->name !!}</h5>
                        <span class="comment-date">{!! $child->created_at !!}</span>
                    </div>
                    <p>{!! $child->body !!}</p>
                    <a class="active reply" data-parentid="{!! $child->id !!}" href="javascript:void(0);">Trả lời</a>
                </div>
            </div>
            @if(count($child->childs))
                @include('includes.guest.manage-comment-child', ['childs' => $child->childs])
            @endif
    @endforeach
    </li>
</ol>
