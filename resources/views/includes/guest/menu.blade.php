<div class="nav-item">
    <div class="container">
        <nav class="nav-menu mobile-menu">
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
</nav>
<div id="mobile-menu-wrap"></div>
</div>
</div>



    