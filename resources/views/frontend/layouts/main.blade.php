<!DOCTYPE html>
<!-- class="dark" -->
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Grocerymart</title>

        <!-- Icon  -->

        <link rel="apple-touch-icon" sizes="76x76" href="site/assets/favicon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="site/assets/favicon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="site/assets/favicon/favicon-16x16.png" />
        <link rel="manifest" href="site/assets/favicon/site.webmanifest" />
        <link rel="mask-icon" href="site/assets/favicon/safari-pinned-tab.svg" color="#5bbad5" />
        <meta name="msapplication-TileColor" content="#da532c" />
        <meta name="theme-color" content="#ffffff" />

        <!-- Font  -->
        <link rel="stylesheet" href="site/assets/fonts/stylesheet.css" />

        <!-- Styles -->
        <link rel="stylesheet" href="site/assets/css/main.css" />

        <!-- Scripts -->
        <script src="site/assets/js/script.js"></script>
    </head>
    <body>

        @include('frontend.layouts.header')

        @yield('content')

        @include('frontend.layouts.footer')


        
      
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
       
        <script type="text/javascript">
        
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
    
            @if (Session::has('success'))
                Toast.fire({
                    icon: 'success',
                    iconColor: '#198754',
                    title: '{{ Session::get('success') }}',
                    customClass: {
                        timerProgressBar: 'bg-green',
                        title: 'cl-green',
                    }
                })
            @endif
    
            @if (Session::has('error'))
                Toast.fire({
                    icon: 'error',
                    iconColor: '#dc3545',
                    title: '{{ Session::get('error') }}',
                    customClass: {
                        timerProgressBar: 'bg-red',
                        title: 'cl-red',
                    }
                })
            @endif
    
            @if (Session::has('warning'))
                Toast.fire({
                    icon: 'warning',
                    iconColor: '#fd7e14',
                    title: '{{ Session::get('warning') }}',
                    customClass: {
                        timerProgressBar: 'bg-orange',
                        title: 'cl-orange',
                    }
                })
            @endif
         
        </script>

        @yield('page_script')
    </body>
</html>
