<ul data-role="treeview">
    @foreach($childs as $child)
        <li>
            <a href="{{ $child->slug }}">
                {{ $child->name }}
            </a>
            @if(count($child->childs))
                @include('includes.guest.manage-child', ['childs' => $menu->childs])
            @endif
        </li>
    @endforeach
</ul>
