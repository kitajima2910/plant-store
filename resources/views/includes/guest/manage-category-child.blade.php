<ul>
    @foreach ($childs as $child)
        <li>
            <a href="{{$child->slug .'.html'}}">
                {{$sub . ' ' . $child->name}}
            </a>
            @if(count($child->childs))
                @include('includes.guest.manage-category-child', ['childs' => $child->childs, 'sub' => $sub . '--'])
            @endif
        </li>
    @endforeach
</ul>
