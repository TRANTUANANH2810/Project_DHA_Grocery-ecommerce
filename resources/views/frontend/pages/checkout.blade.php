@extends('frontend.layouts.main')
@section('content')
    <main class="checkout-page">
        <div class="container">
            <!-- Search bar -->
            <div class="checkout-container">
                <div class="search-bar d-none d-md-flex">
                    <input type="text" name="" id="" placeholder="Search for item"
                        class="search-bar__input" />
                    <button class="search-bar__submit">
                        <img src="site/assets/icons/search.svg" alt="" class="search-bar__icon icon" />
                    </button>
                </div>
            </div>
            <!-- Breadcrumbs -->
            <div class="checkout-container">
            </div>
            <!-- Checkout content -->
            <div class="checkout-container">
                <div class="row gy-xl-3" id="list-cart">
                    <div class="col-8 col-xl-12">
                        <div class="cart-info">

                            <!-- Checkout address -->
                            <div class="user-address">
                                <div class="user-address__top">
                                    <div>
                                        <h2 class="user-address__title">Shipping address</h2>
                                    </div>
                                    {{-- <button class="user-address__btn btn btn--primary btn--rounded btn--small js-toggle"
                                        toggle-target="#add-new-address">
                                        <img src="site/assets/icons/plus.svg" alt="" />
                                        Add a new address
                                    </button>
                                    <!-- Empty message -->
                                    <!-- <p class="user-address__message">
                                                    Not address yet.
                                                    <a class="user-address__link js-toggle" href="#!" toggle-target="#add-new-address">Add a new address</a>
                                                </p> --> --}}
                                </div>
                                <div class="form-container">
                                    <div class="form-group">
                                        <label for="user_name">Name</label>
                                        <input class="" id="user_name" type="text" name="user_name" value="" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_phone">Phone</label>
                                        <input class="" id="user_phone" type="text" name="user_phone" value="" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_address">Address</label>
                                        <textarea class="" name="user_address" id="user_address" style="height: 100px" placeholder="Address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-info__separate"></div>
                            <h2 class="cart-info__sub-heading">Items details</h2>
                            <div class="cart-info__list">
                                @if ($cart != null && $listCartDetail != null)
                                    @foreach ($listCartDetail as $item)
                                        <!-- Cart item 1 -->
                                        <article class="cart-item">
                                            <a href="./product-detail.html">
                                                <img src="{{ $item->product->image }}" alt=""
                                                    class="cart-item__thumb" />
                                            </a>
                                            <div class="cart-item__content">
                                                <div class="cart-item__content-left">
                                                    <h3 class="cart-item__title">
                                                        <a href="./product-detail.html">
                                                            {{ $item->product->name }}
                                                        </a>
                                                    </h3>
                                                    <p class="cart-item__price-wrap">
                                                        ${{ $item->price }}
                                                    </p>
                                                    <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                        <div class="cart-item__input">
                                                            <input class="cart-item__input-text"
                                                                id="quanty-item-{{ $item->product->id }}"
                                                                type="text" value="{{ $item->qty }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cart-item__content-right">
                                                    <p class="cart-item__total-price">${{ $item->price }}</p>
                                                    <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                        <button class="cart-item__ctrl-btn" id="SaveListItemCart"
                                                            data-pid="{{ $item->product->id }}" data-url="{{ route('cart.SaveListItemCart', [$item->product->id, 'NULL']) }}">
                                                            <img src="site/assets/icons/heart-2.svg" alt="" />
                                                            Save
                                                        </button>
                                                        <button class="cart-item__ctrl-btn js-toggle"
                                                            toggle-target="#delete-confirm" id="DeleteListItemCart"
                                                            data-url="{{ route('cart.DeleteItemCart', $item->product->id) }}">
                                                            <img src="site/assets/icons/trash.svg" alt="" />
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    @endforeach
                                @else
                                    <h1 style="">No products</h1>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-xl-12">
                        <div class="cart-info">
                            <div class="cart-info__row">
                                <span>Subtotal <span class="cart-info__sub-label">(items)</span></span>
                                @if ($cart != null && $listCartDetail != null)
                                    <h2 class="act-dropdown__title">You have <span
                                            id="total-quanty-show">{{ $cart->qty }}</span>
                                        item(s)</h2>
                                @else
                                    <h2 class="act-dropdown__title">You have <span id="total-quanty-show">0</span> item(s)
                                    </h2>
                                @endif
                            </div>
                            <div class="cart-info__row">
                                <span>Price <span class="cart-info__sub-label">(Total)</span></span>
                                @if ($cart != null && $listCartDetail != null)
                                    <span>${{ $cart->total_price }}</span>
                                @else
                                    <span>0</span>
                                @endif
                            </div>
                            <a href="?" id="continueToCheckout" data-url="{{ route('cart.ContinueToCheckout') }}"
                                class="cart-info__next-btn btn btn--primary btn--rounded fs-2">
                                Continue to checkout
                            </a>
                        </div>
                        <div class="cart-info">
                            <a href="#!">
                                <article class="gift-item">
                                    <div class="gift-item__icon-wrap">
                                        <img src="site/assets/icons/gift.svg" alt="" class="gift-item__icon" />
                                    </div>
                                    <div class="gift-item__content">
                                        <h3 class="gift-item__title">Send this order as a gift.</h3>
                                        <p class="gift-item__desc">
                                            Available items will be shipped to your gift recipient.
                                        </p>
                                    </div>
                                </article>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </main>
    <Script>
        function RenderListCart(response) {
            $("#list-cart").empty();
            $("#list-cart").html(response);
        }
    </Script>
@stop();
