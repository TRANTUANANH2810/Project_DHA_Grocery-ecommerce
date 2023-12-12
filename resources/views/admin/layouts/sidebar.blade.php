<aside class="main-sidebar sidebar-light-lightblue elevation-4">
    <a href="{{ route('admin.home') }}" class="brand-link" target="_blank">
        
        <img src="{{asset('site/assets/icons/logo.svg')}}"
             alt="Admin Logo" class="brand-image float-none">
        <span class="brand-text font-weight-light">grocerymart</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('admin.layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
