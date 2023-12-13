<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sign In | Grocerymart</title>

        <!-- Icon  -->

        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('site/assets/favicon/apple-touch-icon.png')}}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('site/assets/favicon/favicon-32x32.png')}}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('site/assets/favicon/favicon-16x16.png')}}" />
        <link rel="manifest" href="{{asset('site/assets/favicon/site.webmanifest')}}" />
        <link rel="mask-icon" href="{{asset('site/assets/favicon/safari-pinned-tab.svg')}}" color="#5bbad5" />
        <meta name="msapplication-TileColor" content="#da532c" />
        <meta name="theme-color" content="#ffffff" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">


        <!-- Font  -->
        <link rel="stylesheet" href="{{asset('site/assets/fonts/stylesheet.css')}}" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('site/assets/css/main.css')}}" />

        <!-- Scripts -->
        <script src="{{asset('site/assets/js/script.js')}}"></script>
    </head>
    <body>
        <main class="auth">
            <!-- Auth intro -->
            <div class="auth__intro d-md-none">
                <img src="{{asset('site/assets/img/auth/intro.svg')}}" alt="" class="auth__intro-img" />
                <p class="auth__intro-text">
                    The best of luxury brand values, high quality products, and innovative services
                </p>
            </div>

            <!-- Auth content -->
            <div class="auth__content" style="background: #a75656">
                <div class="auth__content-inner">
                    <a href="./" class="logo">
                        <img src="{{asset('site/assets/icons/logo.svg')}}" alt="grocerymart" class="logo__img" />
                        <h2 class="logo__title">grocerymart {{@Auth::guard('admin')->user()->user_name}}</h2>
                    </a>
                    <form action="{{route('admin.login.post')}}" method="POST" class="form auth__form">
                        @csrf
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="text"
                                    name="user_name"
                                    id=""
                                    placeholder="User name"
                                    class="form__input"
                                    required
                                    autofocus
                                />
                                <img src="site/assets/icons/message.svg" alt="" class="form__input-icon" />
                                <img src="site/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Email is not in correct format</p>
                        </div>
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="password"
                                    name="password"
                                    id=""
                                    placeholder="Password"
                                    class="form__input"
                                    required
                                    minlength="6"
                                />
                                <img src="site/assets/icons/lock.svg" alt="" class="form__input-icon" />
                                <img src="site/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <span class="form__error">Password must be at least 6 characters</span>
                        </div>
                        <div class="form__group form__group--inline">
                            <label class="form__checkbox">
                                <input type="checkbox" name="" id="" class="form__checkbox-input d-none" />
                                <span class="form__checkbox-label">Set as default card</span>
                            </label>
                            {{-- <a href="{{route('home.resetPassword')}}" class="auth__link form__pull-right">Forgot password?</a> --}}
                        </div>
                        <div class="form__group auth__btn-group">
                            <button class="btn btn--primary auth__btn form__submit-btn">Sign In</button>
                        </div>
                    </form>

                </div>
            </div>
        </main>
        <script>
            window.dispatchEvent(new Event("template-loaded"));
        </script>

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

    </body>
</html>
