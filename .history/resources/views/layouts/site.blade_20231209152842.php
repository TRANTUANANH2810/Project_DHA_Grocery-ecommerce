<!DOCTYPE html>
<!-- class="dark" -->
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Grocerymart</title>

        <!-- Icon  -->

        <link rel="apple-touch-icon" sizes="76x76" href="./site/assets/favicon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="./site/assets/favicon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="./site/assets/favicon/favicon-16x16.png" />
        <link rel="manifest" href="./site/assets/favicon/site.webmanifest" />
        <link rel="mask-icon" href="./site/assets/favicon/safari-pinned-tab.svg" color="#5bbad5" />
        <meta name="msapplication-TileColor" content="#da532c" />
        <meta name="theme-color" content="#ffffff" />

        <!-- Font  -->
        <link rel="stylesheet" href="./site/assets/fonts/stylesheet.css" />

        <!-- Styles -->
        <link rel="stylesheet" href="./site/assets/css/main.css" />

        <!-- Scripts -->
        <script src="./site/assets/js/script.js"></script>
    </head>
    <body>
    <header id="header" class="header">
        <div class="container">
            <div class="top-bar">
                <!-- more -->
                <button class="top-bar__more d-none d-lg-block js-toggle" toggle-target="#navbar">
                    <img src="/site/assets/icons/more.svg" alt="" class="icon top-bar__more-icon" />
                </button>
                <!-- logo -->
                <a href="./" class="logo top-bar__logo">
                    <img src="site/assets/icons/logo.svg" alt="grocerymart" class="logo__img top-bar__logo-img" />
                    <h1 class="logo__title top-bar__logo-title">grocerymart</h1>
                </a>

                <!-- navbar -->
                <nav id="navbar" class="navbar hiden">
                    <button class="icon navbar__close-btn js-toggle" toggle-target="#navbar">
                        <img class="icon" src="site/assets/icons/arrow-left.svg" alt="arrow-left" />
                    </button>

                    <a href="#!" class="icon nav-btn d-none d-md-flex">
                        <img src="site/assets/icons/cart.svg" alt="" class="nav-btn__icon" />
                        <span class="nav-btn__title">Card</span>
                        <span class="nav-btn__qnt">3</span>
                    </a>
                    <a href="#!" class="icon nav-btn d-none d-md-flex">
                        <img src="site/assets/icons/love.svg" alt="" class="nav-btn__icon" />
                        <span class="nav-btn__title">Favorites</span>
                        <span class="nav-btn__qnt">3</span>
                    </a>

                    <ul class="navbar__list js-dropdown-list">
                        <li class="navbar__item">
                            <a href="#!" class="navbar__link">
                                Departments
                                <img src="site/assets/icons/arrow-down.svg" alt="" class="icon navbar__arrow" />
                            </a>

                            <!-- dropdown -->
                            <div class="dropdown js-dropdown">
                                <div class="dropdown__inner">
                                    <div class="top-menu">
                                        <div class="top-menu__main">
                                            <!-- menu column  -->
                                            <div class="menu-column">
                                                <div class="menu-column__icon d-lg-none">
                                                    <img
                                                        src="site/assets/img/categoris/cate-1.1.svg"
                                                        alt=""
                                                        class="menu-column__icon-1"
                                                    />
                                                    <img
                                                        src="site/assets/img/categoris/cate-1.2.svg"
                                                        alt=""
                                                        class="menu-column__icon-2"
                                                    />
                                                </div>

                                                <div class="menu-column__content">
                                                    <h2 class="menu-column__heading d-lg-none">All Departments</h2>
                                                    <ul class="menu-column__list js-menu-list">
                                                        <li class="menu-column__item menu-column__item--active">
                                                            <a href="#!" class="menu-column__link">
                                                                Savings &amp; Featured Shops
                                                            </a>
                                                            <!-- Sub menu for "Savings & Featured Shops" -->
                                                            <div class="sub-menu">
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Fashion Deals</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Clothing
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Shoes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Accessories
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bags
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Jewelry
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Electronics Discounts</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Smartphones
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Laptops
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Headphones
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Cameras
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Tablets
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Speakers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wearable Tech
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-1.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-1.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Home &amp; Living Specials</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Furniture
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Kitchenware
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Decor
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bedding
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Appliances
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Lighting
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Outdoor Furniture
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Home Office
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bathroom
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Storage
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Cleaning Supplies
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Beauty Bargains</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Skincare
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Makeup
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Haircare
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Fragrances
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Nail Care
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Beauty Tools
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Men's Grooming
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Sports &amp; Outdoors Deals</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Fitness Equipment
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Outdoor Gear
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sportswear
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Camping
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Biking
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Electronics</a>
                                                            <!-- Sub menu for "Electronics" -->
                                                            <div class="sub-menu">
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">TV &amp; Video</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Shop all TVs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        TVs by Size
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Smart TVs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Roku TVs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Streaming
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        TV Mounts &amp; Accessories
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        DVD &amp; Blu-Ray Players
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-3.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-10.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Wearable Technology</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Galaxy Watch
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Apple Watch
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Fitness Trackers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Virtual Reality
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Headphones
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Computers</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Shop All Computers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Laptops
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        PC Gaming
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Monitors
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Chromebook
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Printers &amp; Ink
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Shop all TVs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Computer Accessories
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Desktops
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Tax Software
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Computer Software
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        PC Finder
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Savings</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Tech Savings
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Overstock Savings
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Tech Rollbacks
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Cell Phones</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wireless Deals
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        5G Phones
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Prepaid Phones &amp; Plans
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Refurbished Phones
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        iPhone Accessories
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Cases &amp; Screen Protectors
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Walmart Protection Plan
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Unlocked Phones
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">
                                                                Clothing, Shoes &amp; Accessories
                                                            </a>
                                                            <!-- Sub menu for "Clothing, Shoes & Accessories" -->
                                                            <div class="sub-menu">
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Men's Clothing</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Casual Shirts
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Formal Suits
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Jeans &amp; Pants
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Outerwear
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        T-Shirts
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Women's Clothing</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Dresses
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Skirts
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Blouses &amp; Tops
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Handbags
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Coats &amp; Jackets
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-3.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-10.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Footwear</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Men's Shoes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Women's Shoes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Kids' Shoes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sneakers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Boots
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sandals
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Fashion Accessories</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Belts
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Hats &amp; Caps
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Scarves
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Gloves
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sunglasses
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Watches
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Seasonal Specials</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Winter Wear
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Summer Outfits
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Rain Gear
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Holiday Collection
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Gift Sets
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">
                                                                Home, Furniture &amp; Appliances
                                                            </a>
                                                            <!-- Sub menu for "Home, Furniture & Appliancess" -->
                                                            <div class="sub-menu">
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Living Room</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sofa Sets
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Coffee Tables
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        TV Units
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Book Shelves
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wall Decor
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Kitchen Appliances</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Microwave Ovens
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Dishwashers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Gas Stoves
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Refrigerators
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Blenders
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Sub-Menu Column 3: Bedroom -->
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Bedroom</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Beds
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wardrobes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Dressing Tables
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Nightstands
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Mattresses
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Sub-Menu Column 4: Home Decor -->
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-3.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-10.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Home Decor</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wall Art
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Vases
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Light Fixtures
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Curtains
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Carpets
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Office Furniture</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Office Chairs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Desks
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Cabinets
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Meeting Tables
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bookcases
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Toys &amp; Video Games</a>
                                                            <!-- Sub menu for "Toys & Video Games" -->
                                                            <div class="sub-menu">
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Action Figures</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Superheroes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Anime Figures
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Movie Characters
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Collectibles
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Robots
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Video Games</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Console Games
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        PC Games
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Mobile Games
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Virtual Reality
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Game Accessories
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Sub-Menu Column 3: Educational Toys -->
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-3.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-10.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Educational Toys</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        STEM Kits
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Puzzles
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Books
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Art Supplies
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Learning Tablets
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Outdoor Toys</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Ride-Ons
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Scooters
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bicycles
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sports Gear
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Swimming Pools
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Sub-Menu Column 5: Dolls & Plush -->
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Dolls &amp; Plush</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Fashion Dolls
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Animal Plush
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Character Dolls
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Interactive Dolls
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Collectibles
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Home Improvement</a>
                                                            <!-- Sub menu for "Home Improvement" -->
                                                            <div class="sub-menu">
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Bathroom Upgrades</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Shower Heads
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Vanity Units
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bath Tubs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Tile Options
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bathroom Lighting
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Cabinet Designs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Countertops
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Kitchen Islands
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Backsplash Options
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Appliance Upgrades
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-1.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-1.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Flooring Solutions</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Hardwood Flooring
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Tile Flooring
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Laminate Options
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Carpet Choices
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Vinyl Flooring
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Outdoor Improvements</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Deck Designs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Patio Ideas
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Landscaping
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Garden Decor
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Outdoor Lighting
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Paint &amp; Wallpaper</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wall Paints
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Primers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wallpapers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Stencils
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Paint Brushes
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Lighting &amp; Fixtures</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Ceiling Lights
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wall Lamps
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Outdoor Lights
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Chandeliers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Table Lamps
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Baby</a>
                                                            <!-- Sub menu for "Baby" -->
                                                            <div class="sub-menu">
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Baby Clothing</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Newborn Sets
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Baby Dresses
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Rompers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Shoes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Accessories
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Feeding Essentials</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bottles
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        High Chairs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sterilizers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bibs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sippy Cups
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Diapering</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Diapers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wipes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Changing Tables
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Pails &amp; Refills
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Creams &amp; Ointments
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-3.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-10.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Nursery</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Cribs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bedding Sets
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Decor
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Monitors
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Storage
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Toys &amp; Books</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Educational Toys
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Soft Toys
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Activity Toys
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Books
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Puzzles
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Thermometers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Baby Gates
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Humidifiers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        First Aid
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Vitamins &amp; Supplements
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Household Essentials</a>
                                                            <!-- Sub menu for "Household Essentials" -->
                                                            <div class="sub-menu">
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Fashion Deals</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Clothing
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Shoes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Accessories
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bags
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Jewelry
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Electronics Discounts</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Smartphones
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Laptops
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Headphones
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Cameras
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Tablets
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Speakers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wearable Tech
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-1.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-1.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Home &amp; Living Specials</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Furniture
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Kitchenware
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Decor
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bedding
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Appliances
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Lighting
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Outdoor Furniture
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Home Office
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bathroom
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Storage
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Cleaning Supplies
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Beauty Bargains</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Skincare
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Makeup
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Haircare
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Fragrances
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Nail Care
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Beauty Tools
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Men's Grooming
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Sports &amp; Outdoors Deals</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Fitness Equipment
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Outdoor Gear
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sportswear
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Camping
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Biking
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Personal Care</a>
                                                            <!-- Sub menu for "Personal Care" -->
                                                            <div class="sub-menu">
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">TV &amp; Video</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Shop all TVs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        TVs by Size
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Smart TVs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Roku TVs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Streaming
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        TV Mounts &amp; Accessories
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        DVD &amp; Blu-Ray Players
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-3.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-10.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Wearable Technology</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Galaxy Watch
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Apple Watch
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Fitness Trackers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Virtual Reality
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Headphones
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Computers</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Shop All Computers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Laptops
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        PC Gaming
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Monitors
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Chromebook
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Printers &amp; Ink
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Shop all TVs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Computer Accessories
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Desktops
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Tax Software
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Computer Software
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        PC Finder
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Savings</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Tech Savings
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Overstock Savings
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Tech Rollbacks
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Cell Phones</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wireless Deals
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        5G Phones
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Prepaid Phones &amp; Plans
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Refurbished Phones
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        iPhone Accessories
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Cases &amp; Screen Protectors
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Walmart Protection Plan
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Unlocked Phones
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Patio &amp; Garden</a>
                                                            <!-- Sub menu for "Patio & Garden" -->
                                                            <div class="sub-menu">
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Men's Clothing</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Casual Shirts
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Formal Suits
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Jeans &amp; Pants
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Outerwear
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        T-Shirts
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Women's Clothing</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Dresses
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Skirts
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Blouses &amp; Tops
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Handbags
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Coats &amp; Jackets
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-3.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-10.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Footwear</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Men's Shoes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Women's Shoes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Kids' Shoes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sneakers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Boots
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sandals
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Fashion Accessories</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Belts
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Hats &amp; Caps
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Scarves
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Gloves
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sunglasses
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Watches
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Seasonal Specials</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Winter Wear
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Summer Outfits
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Rain Gear
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Holiday Collection
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Gift Sets
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Sports &amp; Outdoors</a>
                                                            <!-- Sub menu for "Sports & Outdoors" -->
                                                            <div class="sub-menu">
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Living Room</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sofa Sets
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Coffee Tables
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        TV Units
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Book Shelves
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wall Decor
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Kitchen Appliances</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Microwave Ovens
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Dishwashers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Gas Stoves
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Refrigerators
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Blenders
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Bedroom</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Beds
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wardrobes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Dressing Tables
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Nightstands
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Mattresses
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-3.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-10.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Home Decor</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wall Art
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Vases
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Light Fixtures
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Curtains
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Carpets
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Office Furniture</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Office Chairs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Desks
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Cabinets
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Meeting Tables
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bookcases
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Gift Cards</a>
                                                            <!-- Sub menu for "Gift Cards" -->
                                                            <div class="sub-menu">
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Action Figures</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Superheroes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Anime Figures
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Movie Characters
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Collectibles
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Robots
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Video Games</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Console Games
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        PC Games
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Mobile Games
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Virtual Reality
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Game Accessories
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-3.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-10.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Educational Toys</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        STEM Kits
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Puzzles
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Books
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Art Supplies
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Learning Tablets
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Outdoor Toys</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Ride-Ons
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Scooters
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bicycles
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sports Gear
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Swimming Pools
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Dolls &amp; Plush</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Fashion Dolls
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Animal Plush
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Character Dolls
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Interactive Dolls
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Collectibles
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">
                                                                Auto, Tires and Industrial
                                                            </a>
                                                            <!-- Sub menu for "Auto, Tires and Industrial" -->
                                                            <div class="sub-menu">
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Bathroom Upgrades</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Shower Heads
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Vanity Units
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bath Tubs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Tile Options
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bathroom Lighting
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Cabinet Designs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Countertops
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Kitchen Islands
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Backsplash Options
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Appliance Upgrades
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-1.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-1.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Flooring Solutions</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Hardwood Flooring
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Tile Flooring
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Laminate Options
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Carpet Choices
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Vinyl Flooring
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Outdoor Improvements</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Deck Designs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Patio Ideas
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Landscaping
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Garden Decor
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Outdoor Lighting
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Paint &amp; Wallpaper</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wall Paints
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Primers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wallpapers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Stencils
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Paint Brushes
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Lighting &amp; Fixtures</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Ceiling Lights
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wall Lamps
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Outdoor Lights
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Chandeliers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Table Lamps
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Movies, Music &amp; Books</a>
                                                            <!-- Sub menu for "Movies, Music & Books" -->
                                                            <div class="sub-menu">
                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-6.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Baby Clothing</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Newborn Sets
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Baby Dresses
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Rompers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Shoes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Accessories
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-5.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Feeding Essentials</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bottles
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        High Chairs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sterilizers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bibs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Sippy Cups
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-4.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Diapering</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Diapers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Wipes
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Changing Tables
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Pails &amp; Refills
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Creams &amp; Ointments
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Menu column 2 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-3.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-10.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Nursery</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Cribs
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Bedding Sets
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Decor
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Monitors
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Storage
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="sub-menu__column">
                                                                    <!-- Menu column 1 -->
                                                                    <div class="menu-column">
                                                                        <div class="menu-column__icon">
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.1.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-1"
                                                                            />
                                                                            <img
                                                                                src="site/assets/img/categoris/cate-2.2.svg"
                                                                                alt=""
                                                                                class="menu-column__icon-2"
                                                                            />
                                                                        </div>
                                                                        <div class="menu-column__content">
                                                                            <h2 class="menu-column__heading">
                                                                                <a href="#!">Toys &amp; Books</a>
                                                                            </h2>
                                                                            <ul class="menu-column__list">
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Educational Toys
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Soft Toys
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Activity Toys
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Books
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Puzzles
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Thermometers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Baby Gates
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Humidifiers
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        First Aid
                                                                                    </a>
                                                                                </li>
                                                                                <li class="menu-column__item">
                                                                                    <a href="#!" class="menu-column__link">
                                                                                        Vitamins &amp; Supplements
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navbar__item">
                            <a href="#!" class="navbar__link">
                                Grocery
                                <img src="site/assets/icons/arrow-down.svg" alt="" class="icon navbar__arrow" />
                            </a>
                            <div class="dropdown js-dropdown">
                                <div class="dropdown__inner">
                                    <div class="top-menu">
                                        <div class="sub-menu sub-menu--not-main">
                                            <div class="sub-menu__column">
                                                <!-- Menu column 1 -->
                                                <div class="menu-column">
                                                    <div class="menu-column__icon">
                                                        <img
                                                            src="site/assets/img/categoris/cate-7.1.svg"
                                                            alt=""
                                                            class="menu-column__icon-1"
                                                        />
                                                        <img
                                                            src="site/assets/img/categoris/cate-7.2.svg"
                                                            alt=""
                                                            class="menu-column__icon-2"
                                                        />
                                                    </div>
                                                    <div class="menu-column__content">
                                                        <h2 class="menu-column__heading">
                                                            <a href="#!">Grocery</a>
                                                        </h2>
                                                        <ul class="menu-column__list">
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Shop All</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Grilling Foods</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Spring Flavors</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Menu column 2 -->
                                                <div class="menu-column">
                                                    <div class="menu-column__icon">
                                                        <img
                                                            src="site/assets/img/categoris/cate-8.1.svg"
                                                            alt=""
                                                            class="menu-column__icon-1"
                                                        />
                                                        <img
                                                            src="site/assets/img/categoris/cate-8.2.svg"
                                                            alt=""
                                                            class="menu-column__icon-2"
                                                        />
                                                    </div>
                                                    <div class="menu-column__content">
                                                        <h2 class="menu-column__heading">
                                                            <a href="#!">Fresh Produce</a>
                                                        </h2>
                                                        <ul class="menu-column__list">
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Shop All</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Celebrate Salad Month</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Healthy Living</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Fresh Flowers</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Chilled Dressing</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Fresh Fruit</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link"
                                                                    >Salad Kits &amp; Bowls</a
                                                                >
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Organic Produce</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Fresh Vegetables</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sub-menu__column">
                                                <!-- Menu column 1 -->
                                                <div class="menu-column">
                                                    <div class="menu-column__icon">
                                                        <img
                                                            src="site/assets/img/categoris/cate-9.1.svg"
                                                            alt=""
                                                            class="menu-column__icon-1"
                                                        />
                                                        <img
                                                            src="site/assets/img/categoris/cate-9.2.svg"
                                                            alt=""
                                                            class="menu-column__icon-2"
                                                        />
                                                    </div>
                                                    <div class="menu-column__content">
                                                        <h2 class="menu-column__heading">
                                                            <a href="#!">Bakery &amp; Bread</a>
                                                        </h2>
                                                        <ul class="menu-column__list">
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Shop All</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">New in Bakery</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Sliced Bread</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Rolls &amp; Buns</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Tortillas</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Breakfast Breads</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Pies</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link"
                                                                    >Cookies &amp; Brownies</a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Menu column 2 -->
                                                <div class="menu-column">
                                                    <div class="menu-column__icon">
                                                        <img
                                                            src="site/assets/img/categoris/cate-10.1.svg"
                                                            alt=""
                                                            class="menu-column__icon-1"
                                                        />
                                                        <img
                                                            src="site/assets/img/categoris/cate-10.2.svg"
                                                            alt=""
                                                            class="menu-column__icon-2"
                                                        />
                                                    </div>
                                                    <div class="menu-column__content">
                                                        <h2 class="menu-column__heading">
                                                            <a href="#!">Frozen</a>
                                                        </h2>
                                                        <ul class="menu-column__list">
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Frozen Breakfast</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Frozen Potatoes</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link"
                                                                    >Frozen Meals &amp; Snacks</a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sub-menu__column">
                                                <!-- Menu column 1 -->
                                                <div class="menu-column">
                                                    <div class="menu-column__icon">
                                                        <img
                                                            src="site/assets/img/categoris/cate-11.1.svg"
                                                            alt=""
                                                            class="menu-column__icon-1"
                                                        />
                                                        <img
                                                            src="site/assets/img/categoris/cate-11.2.svg"
                                                            alt=""
                                                            class="menu-column__icon-2"
                                                        />
                                                    </div>
                                                    <div class="menu-column__content">
                                                        <h2 class="menu-column__heading">
                                                            <a href="#!">Snacks</a>
                                                        </h2>
                                                        <ul class="menu-column__list">
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Shop All</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Chips</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link"
                                                                    >Popcorn &amp; Pretzels</a
                                                                >
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Crackers</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Salsa &amp; Dips</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Menu column 2 -->
                                                <div class="menu-column">
                                                    <div class="menu-column__icon">
                                                        <img
                                                            src="site/assets/img/categoris/cate-12.1.svg"
                                                            alt=""
                                                            class="menu-column__icon-1"
                                                        />
                                                        <img
                                                            src="site/assets/img/categoris/cate-12.2.svg"
                                                            alt=""
                                                            class="menu-column__icon-2"
                                                        />
                                                    </div>
                                                    <div class="menu-column__content">
                                                        <h2 class="menu-column__heading">
                                                            <a href="#!">Candy</a>
                                                        </h2>
                                                        <ul class="menu-column__list">
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Shop All</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Better for You</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Chocolate</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Sugar Free Candy</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Gum</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Mints</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">On-the-Go</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sub-menu__column">
                                                <!-- Menu column 1 -->
                                                <div class="menu-column">
                                                    <div class="menu-column__icon">
                                                        <img
                                                            src="site/assets/img/categoris/cate-13.1.svg"
                                                            alt=""
                                                            class="menu-column__icon-1"
                                                        />
                                                        <img
                                                            src="site/assets/img/categoris/cate-13.2.svg"
                                                            alt=""
                                                            class="menu-column__icon-2"
                                                        />
                                                    </div>
                                                    <div class="menu-column__content">
                                                        <h2 class="menu-column__heading">
                                                            <a href="#!">Cocktails &amp; Mixes Coffee</a>
                                                        </h2>
                                                        <ul class="menu-column__list">
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Ground Coffee</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Whole Bean Coffee</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Coffee Pods</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Instant Coffee</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Menu column 2 -->
                                                <div class="menu-column">
                                                    <div class="menu-column__icon">
                                                        <img
                                                            src="site/assets/img/categoris/cate-14.1.svg"
                                                            alt=""
                                                            class="menu-column__icon-1"
                                                        />
                                                        <img
                                                            src="site/assets/img/categoris/cate-14.2.svg"
                                                            alt=""
                                                            class="menu-column__icon-2"
                                                        />
                                                    </div>
                                                    <div class="menu-column__content">
                                                        <h2 class="menu-column__heading">
                                                            <a href="#!">Beverages</a>
                                                        </h2>
                                                        <ul class="menu-column__list">
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Shop All</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Water</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Soft Drinks</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Fruit Juice</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Sports Drinks</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Energy Drinks</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Tea</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link"
                                                                    >Hot Chocolate &amp; Cocoa</a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navbar__item">
                            <a href="#!" class="navbar__link">
                                Beauty
                                <img src="site/assets/icons/arrow-down.svg" alt="" class="icon navbar__arrow" />
                            </a>
                            <div class="dropdown js-dropdown">
                                <div class="dropdown__inner">
                                    <div class="top-menu">
                                        <div class="sub-menu sub-menu--not-main">
                                            <div class="sub-menu__column">
                                                <!-- Menu column 1 -->
                                                <div class="menu-column">
                                                    <div class="menu-column__icon">
                                                        <img
                                                            src="site/assets/img/categoris/cate-7.1.svg"
                                                            alt=""
                                                            class="menu-column__icon-1"
                                                        />
                                                        <img
                                                            src="site/assets/img/categoris/cate-7.2.svg"
                                                            alt=""
                                                            class="menu-column__icon-2"
                                                        />
                                                    </div>
                                                    <div class="menu-column__content">
                                                        <h2 class="menu-column__heading">
                                                            <a href="#!">Featured Shops</a>
                                                        </h2>
                                                        <ul class="menu-column__list">
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">
                                                                    Pickup Today in Beauty
                                                                </a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">BeautySpaceNK</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Equate Beauty</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Beauty Deals</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Walmart Exclusives</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Luxury Beauty Deals</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">New Arrivals</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Menu column 2 -->
                                                <div class="menu-column">
                                                    <div class="menu-column__icon">
                                                        <img
                                                            src="site/assets/img/categoris/cate-15.1.svg"
                                                            alt=""
                                                            class="menu-column__icon-1"
                                                        />
                                                        <img
                                                            src="site/assets/img/categoris/cate-15.2.svg"
                                                            alt=""
                                                            class="menu-column__icon-2"
                                                        />
                                                    </div>
                                                    <div class="menu-column__content">
                                                        <h2 class="menu-column__heading">
                                                            <a href="#!">Trending in Beauty</a>
                                                        </h2>
                                                        <ul class="menu-column__list">
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link"
                                                                    >Trending Beauty Products</a
                                                                >
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Celebrate Earth Day</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Prom-ready Beauty</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Summer Beauty</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link"
                                                                    >Travel Size &amp; Minis</a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sub-menu__column">
                                                <!-- Menu column 1 -->
                                                <div class="menu-column">
                                                    <div class="menu-column__icon">
                                                        <img
                                                            src="site/assets/img/categoris/cate-16.1.svg"
                                                            alt=""
                                                            class="menu-column__icon-1"
                                                        />
                                                        <img
                                                            src="site/assets/img/categoris/cate-16.2.svg"
                                                            alt=""
                                                            class="menu-column__icon-2"
                                                        />
                                                    </div>
                                                    <div class="menu-column__content">
                                                        <h2 class="menu-column__heading">
                                                            <a href="#!">Featured Brands</a>
                                                        </h2>
                                                        <ul class="menu-column__list">
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Shop All</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">New in Bakery</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Sliced Bread</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Rolls &amp; Buns</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Tortillas</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Breakfast Breads</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Pies</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link"
                                                                    >Cookies &amp; Brownies</a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Menu column 2 -->
                                                <div class="menu-column">
                                                    <div class="menu-column__icon">
                                                        <img
                                                            src="site/assets/img/categoris/cate-17.1.svg"
                                                            alt=""
                                                            class="menu-column__icon-1"
                                                        />
                                                        <img
                                                            src="site/assets/img/categoris/cate-17.2.svg"
                                                            alt=""
                                                            class="menu-column__icon-2"
                                                        />
                                                    </div>
                                                    <div class="menu-column__content">
                                                        <h2 class="menu-column__heading">
                                                            <a href="#!">Communities to Support</a>
                                                        </h2>
                                                        <ul class="menu-column__list">
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Black Owned Beauty</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">LatinX Owned Beauty</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">AAPI Owned Beauty</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sub-menu__column">
                                                <!-- Menu column 1 -->
                                                <div class="menu-column">
                                                    <div class="menu-column__icon">
                                                        <img
                                                            src="site/assets/img/categoris/cate-18.1.svg"
                                                            alt=""
                                                            class="menu-column__icon-1"
                                                        />
                                                        <img
                                                            src="site/assets/img/categoris/cate-18.2.svg"
                                                            alt=""
                                                            class="menu-column__icon-2"
                                                        />
                                                    </div>
                                                    <div class="menu-column__content">
                                                        <h2 class="menu-column__heading">
                                                            <a href="#!">Premium Beauty</a>
                                                        </h2>
                                                        <ul class="menu-column__list">
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Shop All</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Hair Color</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Hair Care</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Skincare</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Fragrance</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Makeup</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link"
                                                                    >Beauty Tech &amp; Tools</a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sub-menu__column">
                                                <!-- Menu column 1 -->
                                                <div class="menu-column">
                                                    <div class="menu-column__icon">
                                                        <img
                                                            src="site/assets/img/categoris/cate-19.1.svg"
                                                            alt=""
                                                            class="menu-column__icon-1"
                                                        />
                                                        <img
                                                            src="site/assets/img/categoris/cate-19.2.svg"
                                                            alt=""
                                                            class="menu-column__icon-2"
                                                        />
                                                    </div>
                                                    <div class="menu-column__content">
                                                        <h2 class="menu-column__heading">
                                                            <a href="#!">Beauty</a>
                                                        </h2>
                                                        <ul class="menu-column__list">
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Shop All</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Men's Grooming</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Bath &amp; Body</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link"
                                                                    >Beauty Tech &amp; Tools</a
                                                                >
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Makeup</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Fragrance</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Nail Care</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Hair Care</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Hair Color</a>
                                                            </li>
                                                            <li class="menu-column__item">
                                                                <a href="#!" class="menu-column__link">Skincare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="navbar__overlay js-toggle" toggle-target="#navbar"></div>

                <!-- action -->
                <div class="top-act">
                    <a href="{{route('homeController.index')}}" class="btn btn--text d-md-none">Sign In</a>
                    <a href="./sign-up.html" class="top-act__sign-up btn btn--primary">Sign Up</a>
                </div>
            </div>
        </div>
        </header>
        <!-- header end -->
        @yield('main')
        <!-- fotter begin -->
        <footer id="footer" class="footer">
        <div class="container">
            <div class="footer__row">
                <!-- Footer column 1 -->
                <div class="footer__col">
                    <!-- Logo -->
                    <a href="./" class="logo footer__logo">
                        <img src="site/assets/icons/logo.svg" alt="grocerymart" class="logo__img" />
                        <h1 class="logo__title">grocerymart</h1>
                    </a>
                    <p class="footer__desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, maxime et veniam eligendi rem
                        voluptatibus.
                    </p>

                    <p class="footer__help-text">Receive product news and updates.</p>
                    <form action="" class="footer__form">
                        <input type="text" class="footer__input" placeholder="Email address" />
                        <button class="btn btn--primary">SEND</button>
                    </form>
                </div>

                <!-- Footer column 2 -->
                <div class="footer__col">
                    <h3 class="footer__heading">Shop</h3>
                    <ul class="footer__list">
                        <li>
                            <a href="#!" class="footer__link">All Departments</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Fashion Deals</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Electronics Discounts</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Home & Living Specials</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Beauty Bargains</a>
                        </li>
                    </ul>
                </div>

                <!-- Footer column 3 -->
                <div class="footer__col">
                    <h3 class="footer__heading">Support</h3>
                    <ul class="footer__list">
                        <li>
                            <a href="#!" class="footer__link">Store locator</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Order status</a>
                        </li>
                    </ul>
                </div>

                <!-- Footer column 4 -->
                <div class="footer__col">
                    <h3 class="footer__heading">Company</h3>
                    <ul class="footer__list">
                        <li>
                            <a href="#!" class="footer__link">Customer Service</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Terms of Use</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Privacy</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Careers</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">About</a>
                        </li>
                        <li>
                            <a href="#!" class="footer__link">Affiliates</a>
                        </li>
                    </ul>
                </div>

                <!-- Footer column 5 -->
                <div class="footer__col">
                    <h3 class="footer__heading">Contact</h3>
                    <ul class="footer__list">
                        <li>
                            <p class="footer__label">Email</p>
                            <a href="mailto:contact@grocerymart.com" class="footer__link"> contact@grocerymart.com </a>
                        </li>
                        <li>
                            <p class="footer__label">Hotline</p>
                            <a href="tel:18008888" class="footer__link">18008888</a>
                        </li>
                        <li>
                            <p class="footer__label">Address</p>
                            <p class="footer__text">
                                No. 11D, Lot A10, Nam Trung Yen urban area, Yen Hoa Ward, Cau Giay District, City. Hanoi
                            </p>
                        </li>
                        <li>
                            <p class="footer__label">Hours</p>
                            <p class="footer__text">M - F 08:00am - 06:00pm</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__bottom">
                <p class="footer__copyright">© 2010 - 2025 Grocery Mart. All rights reserved.</p>

                <div class="footer__socials">
                    <a href="#!" class="footer__social-link footer__social-link--facebook">
                        <img src="site/assets/icons/facebook.svg" alt="" class="footer__social-icon" />
                    </a>
                    <a href="#!" class="footer__social-link footer__social-link--youtube">
                        <img src="site/assets/icons/youtube.svg" alt="" class="footer__social-icon" />
                    </a>
                    <a href="#!" class="footer__social-link footer__social-link--tiktok">
                        <img src="site/assets/icons/tiktok.svg" alt="" class="footer__social-icon" />
                    </a>
                    <a href="#!" class="footer__social-link footer__social-link--twitter">
                        <img src="site/assets/icons/twitter.svg" alt="" class="footer__social-icon" />
                    </a>
                    <a href="#!" class="footer__social-link footer__social-link--linkedin">
                        <img src="site/assets/icons/linkedin.svg" alt="" class="footer__social-icon" />
                    </a>
                </div>
            </div>
        </div>
        </footer>
</body>
</html>

