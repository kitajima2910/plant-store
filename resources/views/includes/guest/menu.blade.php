<div class="mainmenu" >
    <ul data-role="treeview" class="menuSet">
        @foreach($menuMain as $menu)
            <li>
                <a href="{{ $menu->slug }}">
                    {{ $menu->name }}
                </a>
                @if(count($menu->childs))
                    @include('includes.guest.manage-menuchild', ['childs' => $menu->childs])
                @endif
            </li>
        @endforeach
    </ul>
</div>



    