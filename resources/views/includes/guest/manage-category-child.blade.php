<ul>
    @foreach ($childs as $child)
        <li>
            <a href="javascript:void(0);" class="cate-slug" data-slug="{!! $child->slug !!}">
                {{$sub . ' ' . $child->name}}
            </a>
            @if(count($child->childs))
                @include('includes.guest.manage-category-child', ['childs' => $child->childs, 'sub' => $sub . '--'])
            @endif
        </li>
    @endforeach
</ul>
