<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sign Up | Grocerymart</title>

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
        <main class="auth">
            <!-- Auth intro -->
            <div class="auth__intro">
                <a href="./" class="logo auth__intro-logo d-none d-md-flex">
                    <img src="site/assets/icons/logo.svg" alt="grocerymart" class="logo__img" />
                    <h1 class="logo__title">grocerymart</h1>
                </a>
                <img src="site/assets/img/auth/intro.svg" alt="" class="auth__intro-img" />
                <p class="auth__intro-text">
                    The best of luxury brand values, high quality products, and innovative services
                </p>
                <button class="auth__intro-next d-none d-md-flex js-toggle" toggle-target="#auth-content">
                    <img src="site/assets/img/auth/intro-arrow.svg" alt="" />
                </button>
            </div>

            <!-- Auth content -->
            <div id="auth-content" class="auth__content hide">
                <div class="auth__content-inner">
                    <!-- Logo -->
                    <a href="./" class="logo">
                        <img src="site/assets/icons/logo.svg" alt="grocerymart" class="logo__img" />
                        <h1 class="logo__title">grocerymart</h1>
                    </a>
                    <h1 class="auth__heading">Sign Up</h1>
                    <p class="auth__desc">Let’s create your account and Shop like a pro and save money.</p>
                    <form action="{{route('home.register.post')}}" method="POST" class="form auth__form">
                        @csrf

                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="text"
                                    name="first_name"
                                    value="{{old('first_name')}}"
                                    id=""
                                    placeholder="First name"
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
                                    type="text"
                                    name="last_name"
                                    value="{{old('last_name')}}"
                                    id=""
                                    placeholder="Last name"
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
                                    type="text"
                                    name="user_name"
                                    value="{{old('user_name')}}"
                                    id=""
                                    placeholder="User name"
                                    class="form__input"
                                    required
                                    autofocus
                                />
                                <img src="site/assets/icons/message.svg" alt="" class="form__input-icon" />
                                <img src="site/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            @error('user_name')
                            <span class="form__error fr-error d-block mt-2"><i class="fas fa-exclamation-circle"></i>{{$errors->first('user_name')}}</span>
                            @enderror
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
                            @error('password')
                            <span class="form__error fr-error d-block mt-2"><i class="fas fa-exclamation-circle"></i>{{$errors->first('password')}}</span>
                            @enderror
                        </div>
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="password"
                                    name="repassword"
                                    id=""
                                    placeholder="Confirm password"
                                    class="form__input"
                                    required
                                    minlength="6"
                                />
                                <img src="site/assets/icons/lock.svg" alt="" class="form__input-icon" />
                                <img src="site/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            @error('repassword')
                            <span class="form__error fr-error d-block mt-2"><i class="fas fa-exclamation-circle"></i>{{$errors->first('repassword')}}</span>
                            @enderror
                        </div>
                        <div class="form__group form__group--inline">
                            <label class="form__checkbox">
                                <input type="checkbox" name="" id="" class="form__checkbox-input d-none" />
                                <span class="form__checkbox-label">Set as default card</span>
                            </label>
                        </div>
                        <div class="form__group auth__btn-group">
                            <button class="btn btn--primary auth__btn form__submit-btn">Sign Up</button>
                            <a href="{{route('home.registerSeller')}}" class="btn btn--outline auth__btn btn--no-margin">Sign up Seller</a>
                            <button class="btn btn--outline auth__btn btn--no-margin">
                                <img src="site/assets/icons/google.svg" alt="" class="icon btn__icon" />
                                Sign in with Google
                            </button>
                        </div>
                    </form>

                    <p class="auth__text">
                        You have an account yet?
                        <a href="{{route('home.login')}}" class="auth__link auth__text-link">Sign In</a>
                    </p>
                </div>
            </div>
        </main>
        <script>
            window.dispatchEvent(new Event("template-loaded"));
        </script>
    </body>
</html>
