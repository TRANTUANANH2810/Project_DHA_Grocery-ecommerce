@extends('frontend.layouts.main')

@section('content')

<main class="profile">
    <div class="container">
        <!-- Search bar -->
        <div class="profile-container">
            <div class="search-bar d-none d-md-flex">
                <input type="text" name="" id="" placeholder="Search for item" class="search-bar__input" />
                <button class="search-bar__submit">
                    <img src="site/assets/icons/search.svg" alt="" class="search-bar__icon icon" />
                </button>
            </div>
        </div>

        <!-- Profile content -->
        <div class="profile-container">
            <div class="row gy-md-3">
                @include('frontend.pages.dashboard.sidebar')
                <div class="col-9 col-xl-8 col-lg-12">
                    <div class="cart-info">
                        <div class="row gy-3">
                            <!-- My Wallet -->
                            <div class="col-12">
                                <h2 class="cart-info__heading">Tổng quan</h2>
                                <p class="cart-info__desc profile__desc">
                                </p>
                                <div class="row gy-md-2 row-cols-2 row-cols-lg-1">
                                    <!-- Payment card 1 -->
                                    <div class="col" >
                                        <article class="payment-card" style="--bg-color: #c1ac4a">
                                            <img
                                                src="{{asset('site/assets/img/card/leaf-bg.svg')}}"
                                                alt=""
                                                class="payment-card__img"
                                            />
                                            <div class="payment-card__top">
                                                <span class="payment-card__type" style="font-size: 30px">0</span>
                                            </div>
                                            <div class="payment-card__number">sản phẩm trong giỏ hàng</div>
                                           
                                        </article>
                                    </div>

                                    <div class="col">
                                        <article class="payment-card" style="--bg-color: #8c5a6f">
                                            <img
                                                src="{{asset('site/assets/img/card/leaf-bg.svg')}}"
                                                alt=""
                                                class="payment-card__img"
                                            />
                                            <div class="payment-card__top">
                                                <span class="payment-card__type" style="font-size: 30px">0</span>
                                            </div>
                                            <div class="payment-card__number">Sản phẩm yêu thích</div>
                                           
                                        </article>
                                    </div>

                                </div>
                            </div>

                            <!-- Account info -->
                            <div class="col-12">
                                <h2 class="cart-info__heading">Thông tin tài khoản</h2>
                                <p class="cart-info__desc profile__desc">
                                </p>
                                <div class="row gy-md-2 row-cols-2 row-cols-lg-1">
                                    <!-- Account info 1 -->
                                    <div class="col">
                                        <a href="./edit-personal-info.html">
                                            <article class="account-info">
                                                <div class="account-info__icon">
                                                    <img src="{{asset('site/assets/icons/message.svg')}}" alt="" class="icon" />
                                                </div>
                                                <div>
                                                    <h3 class="account-info__title">Email Address</h3>
                                                    <p class="account-info__desc">{{@$user->email}}</p>
                                                </div>
                                            </article>
                                        </a>
                                    </div>

                                    <!-- Account info 2 -->
                                    <div class="col">
                                        <a href="./edit-personal-info.html">
                                            <article class="account-info">
                                                <div class="account-info__icon">
                                                    <img src="{{asset('site/assets/icons/calling.svg')}}" alt="" class="icon" />
                                                </div>
                                                <div>
                                                    <h3 class="account-info__title">Phone number</h3>
                                                    <p class="account-info__desc">{{@$user->phone}}</p>
                                                </div>
                                            </article>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@stop();

