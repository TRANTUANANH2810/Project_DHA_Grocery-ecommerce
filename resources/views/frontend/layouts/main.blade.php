<!DOCTYPE html>
<!-- class="dark" -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grocerymart</title>

    <!-- Icon  -->

    <link rel="apple-touch-icon" sizes="76x76" href="../../site/assets/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../../{{ asset('site/assets/icons/logo.svg') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="../../{{ asset('site/assets/icons/logo.svg') }}" />
    <link rel="manifest" href="../../site/assets/favicon/site.webmanifest" />
    <link rel="mask-icon" href="../../site/assets/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"/>
    
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />



    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <!-- Font  -->
    <link rel="stylesheet" href="../../site/assets/fonts/stylesheet.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="../../site/assets/css/main.css" />
    <!-- JavaScript -->
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    @vite(['resources/js/cart.js']) 
    @vite(['resources/js/script.js']) 

    {{-- <!-- Scripts -->
    <script src="../../site/assets/js/script.js"></script> --}}


    @yield('third_party_stylesheets')

    @yield('page_css')

    

    @yield('third_party_scripts')

    @yield('page_scripts')

</head>

<body>

    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

    @include('admin.manage.layouts.sweet-alert')

    @yield('page_script')
</body>

</html>
