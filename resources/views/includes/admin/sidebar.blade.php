<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="{{ str_contains(Request::path(), 'dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Bảng Điều Khiển</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"  class="{{ str_contains(Request::path(), 'categories') ? 'active' : '' }}">
                        <i class="fa fa-pencil-square"></i>
                        <span>Danh mục sản phẩm</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.categories.index') }}" class="{{ str_contains(Request::path(), 'categories/index') ? 'active' : '' }}">Danh sách</a></li>
                        <li><a href="{{ route('admin.categories.create') }}" class="{{ str_contains(Request::path(), 'categories/create') ? 'active' : '' }}">Thêm danh mục</a></li>
                        <li><a href="{{ route('admin.categories.recover') }}" class="{{ str_contains(Request::path(), 'categories/recover') ? 'active' : '' }}">Khôi phục</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"  class="{{ str_contains(Request::path(), 'menu') ? 'active' : '' }}">
                        <i class="fa fa-book"></i>
                        <span>Menu Web</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.menu.index') }}" class="{{ str_contains(Request::path(), 'menu/index') ? 'active' : '' }}">Danh sách</a></li>
                        <li><a href="{{ route('admin.menu.create') }}" class="{{ str_contains(Request::path(), 'menu/create') ? 'active' : '' }}">Thêm danh mục</a></li>
                        <li><a href="{{ route('admin.menu.recover') }}" class="{{ str_contains(Request::path(), 'menu/recover') ? 'active' : '' }}">Khôi phục</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"  class="{{ str_contains(Request::path(), 'products') ? 'active' : '' }}">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Sản phẩm</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.products.index') }}" class="{{ str_contains(Request::path(), 'products/index') ? 'active' : '' }}">Danh sách</a></li>
                        <li><a href="{{ route('admin.products.create') }}" class="{{ str_contains(Request::path(), 'products/create') ? 'active' : '' }}">Thêm danh mục</a></li>
                        <li><a href="{{ route('admin.products.recover') }}" class="{{ str_contains(Request::path(), 'products/recover') ? 'active' : '' }}">Khôi phục</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"  class="{{ str_contains(Request::path(), 'users') ? 'active' : '' }}">
                        <i class="fa fa-users"></i>
                        <span>Tài khoản</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.users.index') }}" class="{{ str_contains(Request::path(), 'users/index') ? 'active' : '' }}">Danh sách</a></li>
                        <li><a href="{{ route('admin.users.create') }}" class="{{ str_contains(Request::path(), 'users/create') ? 'active' : '' }}">Thêm danh mục</a></li>
                        <li><a href="{{ route('admin.users.recover') }}" class="{{ str_contains(Request::path(), 'users/recover') ? 'active' : '' }}">Khôi phục</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"  class="{{ str_contains(Request::path(), 'settings') ? 'active' : '' }}">
                        <i class="fa fa-cog"></i>
                        <span>Setting</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.settings.index') }}" class="{{ str_contains(Request::path(), 'settings/index') ? 'active' : '' }}">Danh sách</a></li>
                        <li><a href="{{ route('admin.settings.create') }}" class="{{ str_contains(Request::path(), 'settings/create') ? 'active' : '' }}">Thêm danh mục</a></li>
                        <li><a href="{{ route('admin.settings.recover') }}" class="{{ str_contains(Request::path(), 'settings/recover') ? 'active' : '' }}">Khôi phục</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"  class="{{ str_contains(Request::path(), 'sliders') ? 'active' : '' }}">
                        <i class="fa fa-sliders"></i>
                        <span>Slider</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.sliders.index') }}" class="{{ str_contains(Request::path(), 'sliders/index') ? 'active' : '' }}">Danh sách</a></li>
                        <li><a href="{{ route('admin.sliders.create') }}" class="{{ str_contains(Request::path(), 'sliders/create') ? 'active' : '' }}">Thêm danh mục</a></li>
                        <li><a href="{{ route('admin.sliders.recover') }}" class="{{ str_contains(Request::path(), 'sliders/recover') ? 'active' : '' }}">Khôi phục</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"  class="{{ str_contains(Request::path(), 'customers') ? 'active' : '' }}">
                        <i class="fa fa-user"></i>
                        <span>Khách hàng</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.customers.index') }}" class="{{ str_contains(Request::path(), 'customers/index') ? 'active' : '' }}">Danh sách</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
