<ul>
    @foreach ($categories as $menu)
        <li>
            <a href="{{$menu->slug .'.html'}}">
                {{$menu->name}}
            </a>
            @if(count($menu->childs))
                @include('includes.guest.manage-category-child', ['childs' => $menu->childs, 'sub' => '--'])
            @endif
        </li>
    @endforeach
</ul>

