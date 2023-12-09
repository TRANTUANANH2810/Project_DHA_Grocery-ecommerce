@extends('layouts.site_loginer')
@section('home')
<main class="profile">
            <div class="container">
                <!-- Search bar -->
                <div class="profile-container">
                    <div class="search-bar d-none d-md-flex">
                        <input type="text" name="" id="" placeholder="Search for item" class="search-bar__input" />
                        <button class="search-bar__submit">
                            <img src="./assets/icons/search.svg" alt="" class="search-bar__icon icon" />
                        </button>
                    </div>
                </div>
                <!-- Profile content -->
                <div class="profile-container">
                    <div class="row gy-md-3">
                        <div class="col-3 col-xl-4 col-lg-5 col-md-12">
                            <aside class="profile__sidebar">
                                <!-- User -->
                                <div class="profile-user">
                                    <img src="./assets/img/avatar/avatar-3.png" alt="" class="profile-user__avatar" />
                                    <h1 class="profile-user__name">Imran Khan</h1>
                                    <p class="profile-user__desc">Registered: 17th May 2022</p>
                                </div>
                                <!-- Menu 1 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">Manage Account</h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="./edit-personal-info.html" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/profile.svg" alt="" class="icon" />
                                                </span>
                                                Personal info
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/location.svg" alt="" class="icon" />
                                                </span>
                                                Addresses
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/message-2.svg" alt="" class="icon" />
                                                </span>
                                                Communications & privacy
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Menu 2 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">My items</h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/download.svg" alt="" class="icon" />
                                                </span>
                                                Reorder
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/cart.svg" alt="" class="icon" />
                                                </span>
                                                Lists
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/gift-2.svg" alt="" class="icon" />
                                                </span>
                                                Registries
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Menu 3 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">Subscriptions & plans</h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/shield.svg" alt="" class="icon" />
                                                </span>
                                                Protection plans
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Menu 4 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">Customer Service</h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/info.svg" alt="" class="icon" />
                                                </span>
                                                Help
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/danger.svg" alt="" class="icon" />
                                                </span>
                                                Terms of Use
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-9 col-xl-8 col-lg-7 col-md-12">
                            <div class="cart-info">
                                <div class="row gy-3">
                                    <!-- My Wallet -->
                                    <div class="col-12">
                                        <h2 class="cart-info__heading">My Wallet</h2>
                                        <p class="cart-info__desc profile__desc">Payment methods</p>

                                        <div class="row gy-md-2 row-cols-2 row-cols-lg-1">
                                            <!-- Payment card 1 -->
                                            <div class="col">
                                                <article class="payment-card" style="--bg-color: #1e2e69">
                                                    <img
                                                        src="./assets/img/card/plane-bg.svg"
                                                        alt=""
                                                        class="payment-card__img"
                                                    />
                                                    <div class="payment-card__top">
                                                        <img src="./assets/img/card/plane.svg" alt="" />
                                                        <span class="payment-card__type">FeatherCard</span>
                                                    </div>
                                                    <div class="payment-card__number">1234 4567 8901 2221</div>
                                                    <div class="payment-card__bottom">
                                                        <div>
                                                            <p class="payment-card__label">Card Holder</p>
                                                            <p class="payment-card__value">Imran Khan</p>
                                                        </div>
                                                        <div class="payment-card__expired">
                                                            <p class="payment-card__label">Expired</p>
                                                            <p class="payment-card__value">10/22</p>
                                                        </div>
                                                        <div class="payment-card__circle"></div>
                                                    </div>
                                                </article>
                                            </div>

                                            <!-- Payment card 2 -->
                                            <div class="col">
                                                <article class="payment-card" style="--bg-color: #354151">
                                                    <img
                                                        src="./assets/img/card/leaf-bg.svg"
                                                        alt=""
                                                        class="payment-card__img"
                                                    />
                                                    <div class="payment-card__top">
                                                        <img src="./assets/img/card/leaf.svg" alt="" />
                                                        <span class="payment-card__type">FeatherCard</span>
                                                    </div>
                                                    <div class="payment-card__number">1234 4567 2221 8901</div>
                                                    <div class="payment-card__bottom">
                                                        <div>
                                                            <p class="payment-card__label">Card Holder</p>
                                                            <p class="payment-card__value">Imran Khan</p>
                                                        </div>
                                                        <div class="payment-card__expired">
                                                            <p class="payment-card__label">Expired</p>
                                                            <p class="payment-card__value">11/22</p>
                                                        </div>
                                                        <div class="payment-card__circle"></div>
                                                    </div>
                                                </article>
                                            </div>

                                            <!-- Add new payment card -->
                                            <div class="col">
                                                <a class="new-card" href="./add-new-card.html">
                                                    <img
                                                        src="./assets/icons/plus.svg"
                                                        alt=""
                                                        class="new-card__icon icon"
                                                    />
                                                    <p class="new-card__text">Add New Card</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Account info -->
                                    <div class="col-12">
                                        <h2 class="cart-info__heading">Account info</h2>
                                        <p class="cart-info__desc profile__desc">
                                            Addresses, contact information and password
                                        </p>
                                        <div class="row gy-md-2 row-cols-2 row-cols-lg-1">
                                            <!-- Account info 1 -->
                                            <div class="col">
                                                <a href="./edit-personal-info.html">
                                                    <article class="account-info">
                                                        <div class="account-info__icon">
                                                            <img src="./assets/icons/message.svg" alt="" class="icon" />
                                                        </div>
                                                        <div>
                                                            <h3 class="account-info__title">Email Address</h3>
                                                            <p class="account-info__desc">tarek97.ta@gmail.com</p>
                                                        </div>
                                                    </article>
                                                </a>
                                            </div>

                                            <!-- Account info 2 -->
                                            <div class="col">
                                                <a href="./edit-personal-info.html">
                                                    <article class="account-info">
                                                        <div class="account-info__icon">
                                                            <img src="./assets/icons/calling.svg" alt="" class="icon" />
                                                        </div>
                                                        <div>
                                                            <h3 class="account-info__title">Phone number</h3>
                                                            <p class="account-info__desc">+000 11122 2345 657</p>
                                                        </div>
                                                    </article>
                                                </a>
                                            </div>

                                            <!-- Account info 3 -->
                                            <div class="col">
                                                <a href="./edit-personal-info.html">
                                                    <article class="account-info">
                                                        <div class="account-info__icon">
                                                            <img
                                                                src="./assets/icons/location.svg"
                                                                alt=""
                                                                class="icon"
                                                            />
                                                        </div>
                                                        <div>
                                                            <h3 class="account-info__title">Add an address</h3>
                                                            <p class="account-info__desc">
                                                                Bangladesh Embassy, Washington, DC 20008
                                                            </p>
                                                        </div>
                                                    </article>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <h2 class="cart-info__heading">Lists</h2>
                                        <p class="cart-info__desc profile__desc">2 items - Primary</p>

                                        <!-- Favourite item 1 -->
                                        <article class="favourite-item">
                                            <img
                                                src="./assets/img/products/item1.png"
                                                alt=""
                                                class="favourite-item__thumb"
                                            />
                                            <div>
                                                <h3 class="favourite-item__title">
                                                    Coffee Beans - Espresso Arabica and Robusta Beans
                                                </h3>
                                                <div class="favourite-item__content">
                                                    <span class="favourite-item__price">$47.00</span>
                                                    <button class="btn btn--primary btn--rounded">Add to cart</button>
                                                </div>
                                            </div>
                                        </article>

                                        <div class="separate" style="--margin: 20px"></div>

                                        <!-- Favourite item 2 -->
                                        <article class="favourite-item">
                                            <img
                                                src="./assets/img/products/item2.png"
                                                alt=""
                                                class="favourite-item__thumb"
                                            />
                                            <div>
                                                <h3 class="favourite-item__title">
                                                    Lavazza Coffee Blends - Try the Italian Espresso
                                                </h3>
                                                <div class="favourite-item__content">
                                                    <span class="favourite-item__price">$53.00</span>
                                                    <button class="btn btn--primary btn--rounded">Add to cart</button>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @stop();