<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Reset your password | Grocery Mart</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="site/assets/favicon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="site/assets/favicon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="site/assets/favicon/favicon-16x16.png" />
        <link rel="manifest" href="site/assets/favicon/site.webmanifest" />
        <meta name="msapplication-TileColor" content="#da532c" />
        <meta name="theme-color" content="#ffffff" />

        <!-- Fonts -->
        <link rel="stylesheet" href="site/assets/fonts/stylesheet.css" />

        <!-- Styles -->
        <link rel="stylesheet" href="site/assets/css/main.css" />

        <!-- Scripts -->
        <script src="site/assets/js/scripts.js"></script>
    </head>
    <body>
        <main class="auth">
            <!-- Auth intro -->
            <div class="auth__intro d-md-none">
                <img src="site/assets/img/auth/forgot-password.png" alt="" class="auth__intro-img" />
            </div>

            <!-- Auth content -->
            <div class="auth__content">
                <div class="auth__content-inner">
                    <a href="./" class="logo">
                        <img src="site/assets/icons/logo.svg" alt="grocerymart" class="logo__img" />
                        <h2 class="logo__title">grocerymart</h2>
                    </a>
                    <h1 class="auth__heading">Reset your password?</h1>
                    <p class="auth__desc">Enter your email and we'll send you a link to reset your password.</p>
                    <!-- <div class="auth__message message message--success">We have e-mailed your password reset link!</div> -->
                    <form action="./reset-password-emailed.html" class="form auth__form auth__form-forgot">
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="email"
                                    name=""
                                    id=""
                                    placeholder="Email"
                                    class="form__input"
                                    autofocus
                                    required
                                />
                                <img src="site/assets/icons/message.svg" alt="" class="form__input-icon" />
                                <img src="site/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Email is not in correct format</p>
                        </div>
                        <div class="form__group auth__btn-group">
                            <button class="btn btn--primary auth__btn form__submit-btn">Reset password</button>
                        </div>
                    </form>

                    <p class="auth__text">
                        <a href="{{route(" class="auth__link auth__text-link">Back to Sign In</a>
                    </p>
                </div>
            </div>
        </main>
        <script>
            window.dispatchEvent(new Event("template-loaded"));
        </script>
    </body>
</html>
