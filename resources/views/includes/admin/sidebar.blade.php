<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                @foreach($menus as $item)
                    @if(!isset($item['items']))
                        <li>
                            <a class="{{ str_contains(Request::path(), $item['active']) ? 'active' : '' }}" href="{{ route($item['route']) }}">
                                <i class="{{ $item['icon'] }}"></i>
                                <span>{{ $item['name'] }}</span>
                            </a>
                        </li>
                    @else
                        <li class="sub-menu">
                            <a href="javascript:;" class="{{ str_contains(Request::path(), $item['active']) ? 'active' : '' }}">
                                <i class="{{ $item['icon'] }}"></i>
                                <span>{{ $item['name'] }}</span>
                            </a>
                            <ul class="sub">
                                @foreach($item['items'] as $subItem)
                                    <li>
                                        <a href="{{ route($subItem['route']) }}" class="{{ str_contains(Request::path(), $subItem['active']) ? 'active' : '' }}">{{ $subItem['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
