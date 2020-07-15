<div class="left-sidebar">

    <h2>Danh mục</h2>
    <div class="panel-group category-products">
        <!--category-productsr-->
        <div class="panel panel-default">
            <ul data-role="treeview">
                @foreach($menuCategories as $menu)
                    <li>
                        <a href="{{ $menu->slug }}">
                            {{ $menu->name }}
                        </a>
                        @if(count($menu->childs))
                            @include('includes.guest.manage-child', ['childs' => $menu->childs])
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--/category-products-->

</div>
