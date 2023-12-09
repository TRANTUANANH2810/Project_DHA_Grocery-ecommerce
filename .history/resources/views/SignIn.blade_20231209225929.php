<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sign In | Grocerymart</title>

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
            <div class="auth__intro d-md-none">
                <img src="site/assets/img/auth/intro.svg" alt="" class="auth__intro-img" />
                <p class="auth__intro-text">
                    The best of luxury brand values, high quality products, and innovative services
                </p>
            </div>

            <!-- Auth content -->
            <div class="auth__content">
                <div class="auth__content-inner">
                    <a href="./" class="logo">
                        <img src="site/assets/icons/logo.svg" alt="grocerymart" class="logo__img" />
                        <h2 class="logo__title">grocerymart</h2>
                    </a>
                    <h1 class="auth__heading">Hello Again!</h1>
                    <p class="auth__desc">
                        Welcome back to sign in. As a returning customer, you have access to your previously saved all
                        information.
                    </p>
                    <form action="{{route('home.home')}}" class="form auth__form">
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="email"
                                    name=""
                                    id=""
                                    placeholder="Email"
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
                                    name=""
                                    id=""
                                    placeholder="Password"
                                    class="form__input"
                                    required
                                    minlength="6"
                                />
                                <img src="site/assets/icons/lock.svg" alt="" class="form__input-icon" />
                                <img src="site/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Password must be at least 6 characters</p>
                        </div>
                        <div class="form__group form__group--inline">
                            <label class="form__checkbox">
                                <input type="checkbox" name="" id="" class="form__checkbox-input d-none" />
                                <span class="form__checkbox-label">Set as default card</span>
                            </label>
                            <a href="{{route" class="auth__link form__pull-right">Forgot password?</a>
                        </div>
                        <div class="form__group auth__btn-group">
                            <button class="btn btn--primary auth__btn form__submit-btn">Sign In</button>
                            <button class="btn btn--outline auth__btn btn--no-margin">
                                <img src="site/assets/icons/google.svg" alt="" class="btn__icon icon" />
                                Sign in with Google
                            </button>
                        </div>
                    </form>

                    <p class="auth__text">
                        Don’t have an account yet?
                        <a href="{{route('home.SignUp')}}" class="auth__link auth__text-link">Sign Up</a>
                    </p>
                </div>
            </div>
        </main>
        <script>
            window.dispatchEvent(new Event("template-loaded"));
        </script>
    </body>
</html>
