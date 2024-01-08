

@if (!@Auth::user()->is_seller == 1)
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
    <a href="{{route('user.index')}}"
        class="nav-link {{ Request::segment(2) == 'user' ? 'active' : null }}" style="border-radius:0px !important">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Quản lý người dùng
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('seller.index')}}"
        class="nav-link {{ Request::segment(2) == 'seller' ? 'active' : null }}" style="border-radius:0px !important">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Quản lý người bán
        </p>
    </a>
</li>

<li class="nav-item {{ Request::segment(2) == 'category' ? 'menu-open' : null }}">
    <a href=""
        class="nav-link {{ Request::segment(2) == 'category' ? 'active' : null }}" style="border-radius:0px !important">
        <i class="nav-icon fab fa-product-hunt"></i>
        <p>
            Quản lý danh mục
        </p>
        <i class="right fas fa-angle-left"></i>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('category.index')}}"
                class="nav-link {{ Request::segment(3) !== 'create' && Request::segment(2) == 'category'  ? 'active' : null }} ">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách danh mục</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('category.create')}}"
                class="nav-link {{ Request::segment(3) == 'create' && Request::segment(2) == 'category' ? 'active' : null }}">
                <i class="fas fa-plus-circle nav-icon"></i>
                <p>Thêm danh mục</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::segment(2) == 'attribute' ? 'menu-open' : null }}">
    <a href=""
        class="nav-link {{ Request::segment(2) == 'attribute' ? 'active' : null }}" style="border-radius:0px !important">
        <i class="nav-icon fab fa-product-hunt"></i>
        <p>
            Quản lý thuộc tính
        </p>
        <i class="right fas fa-angle-left"></i>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('attribute.index')}}"
                class="nav-link {{ Request::segment(3) !== 'create' && Request::segment(2) == 'attribute'  ? 'active' : null }} ">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách thuộc tính</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('attribute.create')}}"
                class="nav-link {{ Request::segment(3) == 'create' && Request::segment(2) == 'attribute' ? 'active' : null }}">
                <i class="fas fa-plus-circle nav-icon"></i>
                <p>Thêm thuộc tính</p>
            </a>
        </li>
    </ul>
</li>
@endif
@if (@Auth::user()->is_seller == 1)
<li class="nav-header">TRANG NGƯỜI BÁN HÀNG</li>

<li class="nav-item">
    <a href="{{ route('admin.seller.home') }}"
        class="nav-link {{ Request::segment(1) == 'admin' && Request::segment(2) == 'seller-home' ? 'active' : null }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Trang chủ
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('information.edit',Auth::user()->id)}}"
        class="nav-link {{ Request::segment(2) == 'information' ? 'active' : null }}" style="border-radius:0px !important">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Cài đặt tài khoản
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('orders.index')}}"
        class="nav-link {{ Request::segment(2) == 'orders' ? 'active' : null }}" style="border-radius:0px !important">
        <i class="nav-icon fas fa-shopping-cart"></i>
        <p>
            Quản lý đơn hàng
        </p>
    </a>
</li>

<li class="nav-item {{ Request::segment(2) == 'products' ? 'menu-open' : null }}">
    <a href=""
        class="nav-link {{ Request::segment(2) == 'products' ? 'active' : null }}" style="border-radius:0px !important">
        <i class="nav-icon fab fa-product-hunt"></i>
        <p>
            Sản phẩm
        </p>
        <i class="right fas fa-angle-left"></i>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('products.index')}}"
                class="nav-link {{ Request::segment(3) !== 'create' && Request::segment(2) == 'products'  ? 'active' : null }} ">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách sản phẩm</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('products.create')}}"
                class="nav-link {{ Request::segment(3) == 'create' && Request::segment(2) == 'products' ? 'active' : null }}">
                <i class="fas fa-plus-circle nav-icon"></i>
                <p>Thêm sản phẩm</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::segment(2) == 'attribute' ? 'menu-open' : null }}">
    <a href=""
        class="nav-link {{ Request::segment(2) == 'attribute' ? 'active' : null }}" style="border-radius:0px !important">
        <i class="nav-icon fab fa-product-hunt"></i>
        <p>
            Quản lý thuộc tính
        </p>
        <i class="right fas fa-angle-left"></i>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('attribute.index')}}"
                class="nav-link {{ Request::segment(3) !== 'create' && Request::segment(2) == 'attribute'  ? 'active' : null }} ">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách thuộc tính</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('attribute.create')}}"
                class="nav-link {{ Request::segment(3) == 'create' && Request::segment(2) == 'attribute' ? 'active' : null }}">
                <i class="fas fa-plus-circle nav-icon"></i>
                <p>Thêm thuộc tính</p>
            </a>
        </li>
    </ul>
</li>

@endif



{{-- <li class="nav-item {{ Request::segment(2) == 'product' ? 'menu-open' : null }}">
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
</li> --}}







