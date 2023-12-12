<li class="nav-header">TRANG QUẢN TRỊ</li>

<li class="nav-item">
    <a href="{{ route('admin.home') }}"
        class="nav-link {{ Request::segment(1) == 'admin' && Request::segment(2) == '' ? 'active' : null }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Trang chủ
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="" class="nav-link {{ Request::segment(2) == 'users' ? 'active' : null }}">
        <i class="nav-icon fas fa-user-shield"></i>
        <p>
            Quản lý quản trị
        </p>
    </a>
</li>

<li class="nav-item">
    <a href=""
        class="nav-link {{ Request::segment(2) == 'customer' ? 'active' : null }}" style="border-radius:0px !important">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Quản lý người dùng
        </p>
    </a>
</li>

<li class="nav-item">
    <a href=""
        class="nav-link {{ Request::segment(2) == 'customer' ? 'active' : null }}" style="border-radius:0px !important">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Quản lý người bán
        </p>
    </a>
</li>

<li class="nav-item {{ Request::segment(2) == 'product' ? 'menu-open' : null }}">
    <a href=""
        class="nav-link {{ Request::segment(2) == 'product' ? 'active' : null }}" style="border-radius:0px !important">
        <i class="nav-icon fab fa-product-hunt"></i>
        <p>
            Quản lý danh mục
        </p>
        <i class="right fas fa-angle-left"></i>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('category.index')}}"
                class="nav-link {{ Request::segment(3) !== 'create' && Request::segment(2) == 'product'  ? 'active' : null }} ">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách danh mục</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('category.create')}}"
                class="nav-link {{ Request::segment(3) == 'create' && Request::segment(2) == 'product' ? 'active' : null }}">
                <i class="fas fa-plus-circle nav-icon"></i>
                <p>Thêm danh mục</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::segment(2) == 'product' ? 'menu-open' : null }}">
    <a href=""
        class="nav-link {{ Request::segment(2) == 'product' ? 'active' : null }}" style="border-radius:0px !important">
        <i class="nav-icon fab fa-product-hunt"></i>
        <p>
            Quản lý sản phẩm
        </p>
        <i class="right fas fa-angle-left"></i>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href=""
                class="nav-link {{ Request::segment(3) !== 'create' && Request::segment(2) == 'product'  ? 'active' : null }} ">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách sản phẩm</p>
            </a>
        </li>
        <li class="nav-item">
            <a href=""
                class="nav-link {{ Request::segment(3) == 'create' && Request::segment(2) == 'product' ? 'active' : null }}">
                <i class="fas fa-plus-circle nav-icon"></i>
                <p>Thêm sản phẩm</p>
            </a>
        </li>
    </ul>
</li>







