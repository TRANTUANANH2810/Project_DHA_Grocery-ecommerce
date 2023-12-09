@extends('layouts.site_loginer')
@section('home')
<main class="checkout-page">
            <div class="container">
                <!-- Search bar -->
                <div class="checkout-container">
                    <div class="search-bar d-none d-md-flex">
                        <input type="text" name="" id="" placeholder="Search for item" class="search-bar__input" />
                        <button class="search-bar__submit">
                            <img src="./assets/icons/search.svg" alt="" class="search-bar__icon icon" />
                        </button>
                    </div>
                </div>

                <!-- Breadcrumbs -->
                <div class="checkout-container">
                    <ul class="breadcrumbs checkout-page__breadcrumbs">
                        <li>
                            <a href="./" class="breadcrumbs__link">
                                Home
                                <img src="./assets/icons/arrow-right.svg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="breadcrumbs__link breadcrumbs__link--current">Favorite</a>
                        </li>
                    </ul>
                </div>

                <!-- Checkout content -->
                <div class="checkout-container">
                    <div class="row gy-xl-3">
                        <div class="col-12">
                            <div class="cart-info">
                                <h1 class="cart-info__heading">Favourite List</h1>
                                <p class="cart-info__desc">3 items</p>
                                <div class="cart-info__check-all">
                                    <label class="cart-info__checkbox">
                                        <input
                                            type="checkbox"
                                            name="shipping-adress"
                                            class="cart-info__checkbox-input"
                                        />
                                    </label>
                                </div>
                                <div class="cart-info__list">
                                    <!-- Cart item 1 -->
                                    <article class="cart-item">
                                        <label class="cart-info__checkbox">
                                            <input
                                                type="checkbox"
                                                name="shipping-adress"
                                                class="cart-info__checkbox-input"
                                                checked
                                            />
                                        </label>
                                        <a href="./product-detail.html">
                                            <img
                                                src="./assets/img/products/item1.png"
                                                alt=""
                                                class="cart-item__thumb"
                                            />
                                        </a>
                                        <div class="cart-item__content">
                                            <div class="cart-item__content-left">
                                                <h3 class="cart-item__title">
                                                    <a href="./product-detail.html">
                                                        Coffee Beans - Espresso Arabica and Robusta Beans
                                                    </a>
                                                </h3>
                                                <p class="cart-item__price-wrap">
                                                    $47.00 | <span class="cart-item__status">In Stock</span>
                                                </p>
                                                <div class="cart-item__ctrl-wrap">
                                                    <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                        <div class="cart-item__input">
                                                            LavAzza
                                                            <img
                                                                class="icon"
                                                                src="./assets/icons/arrow-down-2.svg"
                                                                alt=""
                                                            />
                                                        </div>
                                                        <div class="cart-item__input">
                                                            <button class="cart-item__input-btn">
                                                                <img
                                                                    class="icon"
                                                                    src="./assets/icons/minus.svg"
                                                                    alt=""
                                                                />
                                                            </button>
                                                            <span>1</span>
                                                            <button class="cart-item__input-btn">
                                                                <img
                                                                    class="icon"
                                                                    src="./assets/icons/plus.svg"
                                                                    alt=""
                                                                />
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="cart-item__ctrl">
                                                        <button class="cart-item__ctrl-btn">
                                                            <img src="./assets/icons/heart-2.svg" alt="" />
                                                            Save
                                                        </button>
                                                        <button
                                                            class="cart-item__ctrl-btn js-toggle"
                                                            toggle-target="#delete-confirm"
                                                        >
                                                            <img src="./assets/icons/trash.svg" alt="" />
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item__content-right">
                                                <p class="cart-item__total-price">$47.00</p>
                                                <button class="cart-item__checkout-btn btn btn--primary btn--rounded">
                                                    Check Out
                                                </button>
                                            </div>
                                        </div>
                                    </article>

                                    <!-- Cart item 2 -->
                                    <article class="cart-item">
                                        <label class="cart-info__checkbox">
                                            <input
                                                type="checkbox"
                                                name="shipping-adress"
                                                class="cart-info__checkbox-input"
                                                checked
                                            />
                                        </label>
                                        <a href="./product-detail.html">
                                            <img
                                                src="./assets/img/products/item2.png"
                                                alt=""
                                                class="cart-item__thumb"
                                            />
                                        </a>
                                        <div class="cart-item__content">
                                            <div class="cart-item__content-left">
                                                <h3 class="cart-item__title">
                                                    <a href="./product-detail.html">
                                                        Lavazza Coffee Blends - Try the Italian Espresso
                                                    </a>
                                                </h3>
                                                <p class="cart-item__price-wrap">
                                                    $53.00 | <span class="cart-item__status">In Stock</span>
                                                </p>
                                                <div class="cart-item__ctrl-wrap">
                                                    <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                        <div class="cart-item__input">
                                                            LavAzza
                                                            <img
                                                                class="icon"
                                                                src="./assets/icons/arrow-down-2.svg"
                                                                alt=""
                                                            />
                                                        </div>
                                                        <div class="cart-item__input">
                                                            <button class="cart-item__input-btn">
                                                                <img
                                                                    class="icon"
                                                                    src="./assets/icons/minus.svg"
                                                                    alt=""
                                                                />
                                                            </button>
                                                            <span>1</span>
                                                            <button class="cart-item__input-btn">
                                                                <img
                                                                    class="icon"
                                                                    src="./assets/icons/plus.svg"
                                                                    alt=""
                                                                />
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="cart-item__ctrl">
                                                        <button class="cart-item__ctrl-btn">
                                                            <img src="./assets/icons/heart-2.svg" alt="" />
                                                            Save
                                                        </button>
                                                        <button
                                                            class="cart-item__ctrl-btn js-toggle"
                                                            toggle-target="#delete-confirm"
                                                        >
                                                            <img src="./assets/icons/trash.svg" alt="" />
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item__content-right">
                                                <p class="cart-item__total-price">$106.00</p>
                                                <button class="cart-item__checkout-btn btn btn--primary btn--rounded">
                                                    Check Out
                                                </button>
                                            </div>
                                        </div>
                                    </article>

                                    <!-- Cart item 3 -->
                                    <article class="cart-item">
                                        <label class="cart-info__checkbox">
                                            <input
                                                type="checkbox"
                                                name="shipping-adress"
                                                class="cart-info__checkbox-input"
                                            />
                                        </label>
                                        <a href="./product-detail.html">
                                            <img
                                                src="./assets/img/products/item3.png"
                                                alt=""
                                                class="cart-item__thumb"
                                            />
                                        </a>
                                        <div class="cart-item__content">
                                            <div class="cart-item__content-left">
                                                <h3 class="cart-item__title">
                                                    <a href="./product-detail.html">
                                                        Qualità Oro Mountain Grown - Espresso Coffee Beans
                                                    </a>
                                                </h3>
                                                <p class="cart-item__price-wrap">
                                                    $38.65 | <span class="cart-item__status">In Stock</span>
                                                </p>
                                                <div class="cart-item__ctrl-wrap">
                                                    <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                        <div class="cart-item__input">
                                                            LavAzza
                                                            <img
                                                                class="icon"
                                                                src="./assets/icons/arrow-down-2.svg"
                                                                alt=""
                                                            />
                                                        </div>
                                                        <div class="cart-item__input">
                                                            <button class="cart-item__input-btn">
                                                                <img
                                                                    class="icon"
                                                                    src="./assets/icons/minus.svg"
                                                                    alt=""
                                                                />
                                                            </button>
                                                            <span>1</span>
                                                            <button class="cart-item__input-btn">
                                                                <img
                                                                    class="icon"
                                                                    src="./assets/icons/plus.svg"
                                                                    alt=""
                                                                />
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="cart-item__ctrl">
                                                        <button class="cart-item__ctrl-btn">
                                                            <img src="./assets/icons/heart-2.svg" alt="" />
                                                            Save
                                                        </button>
                                                        <button
                                                            class="cart-item__ctrl-btn js-toggle"
                                                            toggle-target="#delete-confirm"
                                                        >
                                                            <img src="./assets/icons/trash.svg" alt="" />
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item__content-right">
                                                <p class="cart-item__total-price">$38.65</p>
                                                <button class="cart-item__checkout-btn btn btn--primary btn--rounded">
                                                    Check Out
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="cart-info__bottom">
                                    <div class="cart-info__row cart-info__row-md--block">
                                        <div class="cart-info__continue">
                                            <a href="./" class="cart-info__continue-link">
                                                <img
                                                    class="cart-info__continue-icon icon"
                                                    src="./assets/icons/arrow-down-2.svg"
                                                    alt=""
                                                />
                                                Continue Shopping
                                            </a>
                                        </div>
                                        <a
                                            href="./checkout.html"
                                            class="cart-info__checkout-all btn btn--primary btn--rounded"
                                        >
                                            All Check Out
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@stop();