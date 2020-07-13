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
                        <i class="fa fa-book"></i>
                        <span>Danh mục sản phẩm</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.categories.index') }}" class="{{ str_contains(Request::path(), 'categories/index') ? 'active' : '' }}">Danh sách</a></li>
                        <li><a href="{{ route('admin.categories.add') }}" class="{{ str_contains(Request::path(), 'categories/add') ? 'active' : '' }}">Thêm danh mục</a></li>
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
                        <li><a href="{{ route('admin.menu.add') }}" class="{{ str_contains(Request::path(), 'menu/add') ? 'active' : '' }}">Thêm danh mục</a></li>
                        <li><a href="{{ route('admin.menu.recover') }}" class="{{ str_contains(Request::path(), 'menu/recover') ? 'active' : '' }}">Khôi phục</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"  class="{{ str_contains(Request::path(), 'products') ? 'active' : '' }}">
                        <i class="fa fa-book"></i>
                        <span>Sản phẩm</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.products.index') }}" class="{{ str_contains(Request::path(), 'products/index') ? 'active' : '' }}">Danh sách</a></li>
                        <li><a href="{{ route('admin.products.add') }}" class="{{ str_contains(Request::path(), 'products/add') ? 'active' : '' }}">Thêm danh mục</a></li>
                        <li><a href="{{ route('admin.products.recover') }}" class="{{ str_contains(Request::path(), 'products/recover') ? 'active' : '' }}">Khôi phục</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"  class="{{ str_contains(Request::path(), 'users') ? 'active' : '' }}">
                        <i class="fa fa-book"></i>
                        <span>Tài khoản</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.users.index') }}" class="{{ str_contains(Request::path(), 'users/index') ? 'active' : '' }}">Danh sách</a></li>
                        <li><a href="{{ route('admin.users.add') }}" class="{{ str_contains(Request::path(), 'users/add') ? 'active' : '' }}">Thêm danh mục</a></li>
                        <li><a href="{{ route('admin.users.recover') }}" class="{{ str_contains(Request::path(), 'users/recover') ? 'active' : '' }}">Khôi phục</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"  class="{{ str_contains(Request::path(), 'settings') ? 'active' : '' }}">
                        <i class="fa fa-book"></i>
                        <span>Setting</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.settings.index') }}" class="{{ str_contains(Request::path(), 'settings/index') ? 'active' : '' }}">Danh sách</a></li>
                        <li><a href="{{ route('admin.settings.add') }}" class="{{ str_contains(Request::path(), 'settings/add') ? 'active' : '' }}">Thêm danh mục</a></li>
                        <li><a href="{{ route('admin.settings.recover') }}" class="{{ str_contains(Request::path(), 'settings/recover') ? 'active' : '' }}">Khôi phục</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"  class="{{ str_contains(Request::path(), 'sliders') ? 'active' : '' }}">
                        <i class="fa fa-book"></i>
                        <span>Slider</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.sliders.index') }}" class="{{ str_contains(Request::path(), 'sliders/index') ? 'active' : '' }}">Danh sách</a></li>
                        <li><a href="{{ route('admin.sliders.add') }}" class="{{ str_contains(Request::path(), 'sliders/add') ? 'active' : '' }}">Thêm danh mục</a></li>
                        <li><a href="{{ route('admin.sliders.recover') }}" class="{{ str_contains(Request::path(), 'sliders/recover') ? 'active' : '' }}">Khôi phục</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"  class="{{ str_contains(Request::path(), 'customers') ? 'active' : '' }}">
                        <i class="fa fa-book"></i>
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
