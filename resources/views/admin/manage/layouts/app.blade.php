<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="icon" type="image/x-icon" href="{{asset('site/assets/icons/logo.svg')}}">
    <title>Admin</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('backend/plugins/fontawesome/css/all.min.css')}}">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{url('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    
    <!-- Sweetalert2 CSS -->
    <link rel="stylesheet" href="{{url('backend/plugins/sweetalert2/sweetalert2.min.css')}}">

    <!-- Select2 CSS -->
    {{-- <link rel="stylesheet" href="{{url('backend/plugins/select2/css/select2.css')}}"> --}}

    <!-- Ekko-lightbox CSS -->
    <link rel="stylesheet" href="{{url('backend/plugins/ekko-lightbox/ekko-lightbox.css')}}">
    
    <!-- Datatables Css -->

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ url('backend/css/mystyle.css?v='.time()) }}">

    <link rel="stylesheet" href="{{ url('backend/css/custom.css?v='.time()) }}">

    
    <script src="{{ asset('backend/plugins/ckeditor/ckeditor.js') }}"></script>
    
    <script type="text/javascript">
        function homeUrl() {
            return "{!! url('/') !!}";
        }
    </script>
  
    @yield('third_party_stylesheets')

    @yield('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{asset('site/assets/icons/logo.svg')}}" alt="logo" width="100">
    </div>
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-toggle="dropdown">
                    <img src="{{ @Auth::user()->image ? @Auth::user()->image : asset('backend/images/default.png') }}" class="user-image img-circle elevation-2" alt="User Image">
                    <div class="d-none d-md-inline">
                        <span class="font-weight-bold">
                            @if (Auth::check())
                                {{@Auth::user()->last_name}}  {{@Auth::user()->first_name}}
                            @else
                                {{@Auth::guard('admin')->user()->last_name}}  {{@Auth::guard('admin')->user()->first_name}}
                            @endif
                        </span>
                        <br>
                        <span class="fs-15"></span>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-dark">
                        <img src="{{@Auth::user()->image ? @Auth::user()->image : asset('backend/images/default.png')}}"
                             class="img-circle elevation-2"
                             alt="User Image">
                        <p>
                        {{@Auth::guard('admin')->user()->last_name}}  {{@Auth::guard('admin')->user()->first_name}}
                            <small>Thành viên từ: {{@Auth::guard('admin')->check() ? @Auth::guard('admin')->user()->created_at->format('d-m-Y') : @Auth::user()->created_at->format('d-m-Y')}}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="{{route('admin.logout')}}" class="btn btn-default btn-flat float-right">
                            Sign out
                        </a>
                        <form id="logout-form" action="" method="GET" class="d-none">
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Left side column. contains the logo and sidebar -->
@include('admin.manage.layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
    </div>

    <!-- Main Footer -->
    <footer class="main-footer text-center">
        {{-- <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.5
        </div> --}}
        <strong>Copyright &copy; {{date('Y')}} <a href="https://jks.vn/" target="_blank" style="color:#F69922">MT.VN</a>.</strong> All rights
        reserved.
    </footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"
        integrity="sha512-igl8WEUuas9k5dtnhKqyyld6TzzRjvMqLC79jkgT3z02FvJyHAuUtyemm/P/jYSne1xwFI06ezQxEwweaiV7VA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- MomentJs -->
<script src="{{ asset('backend/plugins/moment/moment.min.js') }}"></script>


<!-- Tempusdominus Bootstrap 4 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"
        integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA==" crossorigin="anonymous"></script>
{{-- <script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script> --}}

<!-- Ekko-lightbox CSS -->
<script src="{{url('backend/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>

<!-- Sweetalert2 JS  -->
<script src="{{url('backend/plugins/sweetalert2/sweetalert2.min.js')}}"></script>

<!-- Select2  -->
<script src="{{ asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>

<!-- Datatables Js -->

<!-- CKEditor - CKFinder -->
<script src="{{ asset('backend/plugins/ckeditor5/build/ckeditor.js') }}"></script>
<script src="{{ asset('backend/plugins/ckfinder/ckfinder.js') }}"></script>

<!-- TinyMce -->
<script src="{{ asset('backend/plugins/tinymce/tinymce.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<!-- My Script -->
<script src="{{ url('backend/js/myscript.js?v='.time()) }}"></script>
<script src="{{ url('backend/js/myJS.js?v='.time()) }}"></script>
<script src="{{ url('backend/js/jquery.nestable.js') }}"></script>
<script>
    CKEDITOR.replace('content', {
        height: 400,
    })
    CKEDITOR.replace('description', {
        height: 400,
    })
</script>
<!-- Sweet Alert Config-->
@include('admin.manage.layouts.sweet-alert')

@include('admin.manage.layouts.modal-confim-delete')

@yield('third_party_scripts')

@yield('page_scripts')

</body>
</html>
