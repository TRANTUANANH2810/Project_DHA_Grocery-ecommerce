@extends('frontend.layouts.main')
@section('content')
    <main class="product-page">
        <div class="container">
            <!-- Search bar -->
            <div class="product-container">
                <div class="search-bar d-none d-md-flex">
                    <input type="text" name="" id="" placeholder="Search for item"
                        class="search-bar__input" />
                    <button class="search-bar__submit">
                        <img src="site/assets/icons/search.svg" alt="" class="search-bar__icon icon" />
                    </button>
                </div>
            </div>
            <!-- Breadcrumbs -->
            <div class="product-container">
          
            </div>

            <!-- Product info -->
            <div class="product-container prod-info-content">
                <div class="row">
                    <div class="col-5 col-xl-6 col-lg-12">
                        <div class="prod-preview">
                            <div class="prod-preview__list">
                                <div class="prod-preview__item">
                                    <img src="{{ $products->image }}" alt="" class="prod-preview__img" />
                                </div>
                                <div class="prod-preview__item">
                                    <img src="../../site/assets/img/products/item2.png" alt=""
                                        class="prod-preview__img" />
                                </div>
                                <div class="prod-preview__item">
                                    <img src="../../site/assets/img/products/item3.png" alt=""
                                        class="prod-preview__img" />
                                </div>
                                <div class="prod-preview__item">
                                    <img src="../../site/assets/img/products/item4.png" alt=""
                                        class="prod-preview__img" />
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-7 col-xl-6 col-lg-12">
                        <form action="" class="form">
                            <section class="prod-info">
                                <h1 class="prod-info__heading">{{ $products->name }}</h1>
                                <div class="row">
                                    <div class="col-5 col-xxl-6 col-xl-12">
                                        <div class="prod-prop">
                                            <img src="../../site/assets/icons/star.svg" alt=""
                                                class="prod-prop__icon" />
                                            <h4 class="prod-prop__title">(3.5) 1100 reviews</h4>
                                        </div>
                                        <label for="" class="form__label prod-info__label">Quantity</label>
                                        <div class="filter__form-group">


                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <div>
                                                    <input type="hidden" name="id" value="{{ $products->id }}">
                                                    <input class="ipqty" type="number" name="quantity" min="1"
                                                        step="1" value="1">
                                                </div>
                                            
                                            </form>

                                        </div>

                                    </div>
                                    <div class="col-7 col-xxl-6 col-xl-12">
                                        <div class="prod-props">
                                            <div class="prod-prop">
                                                <img src="../../site/assets/icons/document.svg" alt=""
                                                    class="icon prod-prop__icon" />
                                                <h4 class="icon prod-prop__title">Compare</h4>
                                            </div>
                                            <div class="prod-prop">
                                                <img src="../../site/assets/icons/cart.svg" alt=""
                                                    class="icon prod-prop__icon" />
                                                <div>
                                                    <h4 class="prod-prop__title">Delivery</h4>
                                                    <p class="prod-prop__desc">From $6 for 1-3 days</p>
                                                </div>
                                            </div>
                                            <div class="prod-prop">
                                                <img src="../../site/assets/icons/bag.svg" alt=""
                                                    class="icon prod-prop__icon" />
                                                <div>
                                                    <h4 class="prod-prop__title">Pickup</h4>
                                                    <p class="prod-prop__desc">Out of 2 store, today</p>
                                                </div>
                                            </div>

                                            <div class="prod-info__card">
                                                @if ($products->price_old > 0)
                                                    <div class="prod-info__row">
                                                        <span class="prod-info__price">${{ $products->price_old }}</span>
                                                        <span
                                                            class="prod-info__tax">{{ percent($products->price, $products->price_old) }}%</span>
                                                    </div>
                                                    <p class="prod-info__total-price">${{ $products->price }}</p>
                                                @else
                                                    <p class="prod-info__total-price">${{ $products->price }}</p>
                                                @endif
                                                <div class="prod-info__row">
                                                    <a id="AddCart" href="javascript:"
                                                        class="btn btn--primary prod-info__add-to-cart"
                                                        data-pid="{{ $products->id }}" data-url="{!! route('cart.AddCart', $products->id) !!}">
                                                        Add to cart
                                                    </a>
                                                    <button class="like-btn prod-info__like-btn">
                                                        <img src="../../site/assets/icons/love.svg" alt=""
                                                            class="like-btn__icon icon" />
                                                        <img src="../../site/assets/icons/love-red.svg" alt=""
                                                            class="like-btn__icon--liked icon" />
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>

                <!-- infomartion Shop -->
                <div style="margin-top: 30px" class="name-shop">
                    <!-- category -item 1 -->
                    <a href="#!">
                        <article class="name-shop cate-item">
                            <img src="{{$products->seller->user->image}}" alt="" class="cate-item__thumb" />

                            <div class="cate-item__info">
                                <h3 class="cate-item__title">{{ $products->seller->shop_name }}</h3>
                                <p class="cate-item__desc">{{ $products->seller->shop_address }}t</p>
                            </div>
                        </article>
                    </a>
                </div>
            </div>
        </div>

        <!-- Product content -->
        <div class="product-container">
            <div class="prod-tab js-tabs">
                <ul class="prod-tab__list">
                    <li class="prod-tab__item prod-tab__item--current">Description</li>
                    <li class="prod-tab__item">Review (1100)</li>
                    <li class="prod-tab__item">Similar</li>
                </ul>
                <div class="prod-tab__contents">
                    <div class="prod-tab__content prod-tab__content--current">
                        <div class="row">
                            <div class="col-8 offset-2 col-xl-10 offset-xl-1 col-lg-12 offset-lg-0">
                                <div class="text-content">
                                    {!! $products->content !!}
                                    {!! $products->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prod-tab__content prod-tab__content--current">
                        <div class="prod-content">
                            <h2 class="prod-content__heading">What our customers are saying</h2>
                            <div class="row row-cols-3 gx-lg-2 row-cols-md-1 gy-md-3">
                                <!-- Review card 1 -->
                                <div class="col">
                                    <div class="review-card">
                                        <div class="review-card__content">
                                            <img src="../../site/assets/img/avatar/avatar-1.png" alt=""
                                                class="review-card__avatar" />
                                            <div class="review-card__info">
                                                <h4 class="review-card__title">Jakir Hussen</h4>
                                                <p class="review-card__desc">
                                                    Great product, I love this Coffee Beans
                                                </p>
                                            </div>
                                        </div>
                                        <div class="review-card__rating">
                                            <div class="review-card__star-list">
                                                <img src="../../site/assets/icons/star.svg" alt=""
                                                    class="review-card__star" />
                                                <img src="../../site/assets/icons/star.svg" alt=""
                                                    class="review-card__star" />
                                                <img src="../../site/assets/icons/star.svg" alt=""
                                                    class="review-card__star" />
                                                <img src="../../site/assets/icons/star-half.svg" alt=""
                                                    class="review-card__star" />
                                                <img src="../../site/assets/icons/star-blank.svg" alt=""
                                                    class="review-card__star" />
                                            </div>
                                            <span class="review-card__rating-title">(3.5) Review</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review card 2 -->
                                <div class="col">
                                    <div class="review-card">
                                        <div class="review-card__content">
                                            <img src="../../site/assets/img/avatar/avatar-2.png" alt=""
                                                class="review-card__avatar" />
                                            <div class="review-card__info">
                                                <h4 class="review-card__title">Jubed Ahmed</h4>
                                                <p class="review-card__desc">
                                                    Awesome Coffee, I love this Coffee Beans
                                                </p>
                                            </div>
                                        </div>
                                        <div class="review-card__rating">
                                            <div class="review-card__star-list">
                                                <img src="../../site/assets/icons/star.svg" alt=""
                                                    class="review-card__star" />
                                                <img src="../../site/assets/icons/star.svg" alt=""
                                                    class="review-card__star" />
                                                <img src="../../site/assets/icons/star.svg" alt=""
                                                    class="review-card__star" />
                                                <img src="../../site/assets/icons/star-half.svg" alt=""
                                                    class="review-card__star" />
                                                <img src="../../site/assets/icons/star-blank.svg" alt=""
                                                    class="review-card__star" />
                                            </div>
                                            <span class="review-card__rating-title">(3.5) Review</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review card 3 -->
                                <div class="col">
                                    <div class="review-card">
                                        <div class="review-card__content">
                                            <img src="../../site/assets/img/avatar/avatar-3.png" alt=""
                                                class="review-card__avatar" />
                                            <div class="review-card__info">
                                                <h4 class="review-card__title">Delwar Hussain</h4>
                                                <p class="review-card__desc">
                                                    Great product, I like this Coffee Beans
                                                </p>
                                            </div>
                                        </div>
                                        <div class="review-card__rating">
                                            <div class="review-card__star-list">
                                                <img src="../../site/assets/icons/star.svg" alt=""
                                                    class="review-card__star" />
                                                <img src="../../site/assets/icons/star.svg" alt=""
                                                    class="review-card__star" />
                                                <img src="../../site/assets/icons/star.svg" alt=""
                                                    class="review-card__star" />
                                                <img src="../../site/assets/icons/star-half.svg" alt=""
                                                    class="review-card__star" />
                                                <img src="../../site/assets/icons/star-blank.svg" alt=""
                                                    class="review-card__star" />
                                            </div>
                                            <span class="review-card__rating-title">(3.5) Review</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prod-tab__content">
                        <div class="prod-content">
                            <h2 class="prod-content__heading">Similar items you might like</h2>
                            <div class="row row-cols-6 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 g-3">
                                <!-- Product card 1 -->
                                <div class="col">
                                    <article class="product-card">
                                        <div class="product-card__img-wrap">
                                            <a href="./product-detail.html">
                                                <img src="../../site/assets/img/products/item1.png" alt=""
                                                    class="product-card__thumb" />
                                            </a>
                                            <button class="like-btn product-card__like-btn">
                                                <img src="../../site/assets/icons/love.svg" alt=""
                                                    class="like-btn__icon icon" />
                                                <img src="../../site/assets/icons/love-red.svg" alt=""
                                                    class="like-btn__icon--liked" />
                                            </button>
                                        </div>
                                        <h3 class="product-card__title">
                                            <a href="./product-detail.html">Coffee Beans - Espresso Arabica and Robusta
                                                Beans</a>
                                        </h3>
                                        <p class="product-card__brand">Lavazza</p>
                                        <div class="product-card__row">
                                            <span class="product-card__price">$47.00</span>
                                            <img src="../../site/assets/icons/star.svg" alt=""
                                                class="product-card__star" />
                                            <span class="product-card__score">4.3</span>
                                        </div>
                                    </article>
                                </div>

                                <!-- Product card 2 -->
                                <div class="col">
                                    <article class="product-card">
                                        <div class="product-card__img-wrap">
                                            <a href="./product-detail.html">
                                                <img src="../../site/assets/img/products/item2.png" alt=""
                                                    class="product-card__thumb" />
                                            </a>
                                            <button class="like-btn product-card__like-btn">
                                                <img src="../../site/assets/icons/love.svg" alt=""
                                                    class="like-btn__icon icon" />
                                                <img src="../../site/assets/icons/love-red.svg" alt=""
                                                    class="like-btn__icon--liked" />
                                            </button>
                                        </div>
                                        <h3 class="product-card__title">
                                            <a href="./product-detail.html">Lavazza Coffee Blends - Try the Italian
                                                Espresso</a>
                                        </h3>
                                        <p class="product-card__brand">Lavazza</p>
                                        <div class="product-card__row">
                                            <span class="product-card__price">$53.00</span>
                                            <img src="../../site/assets/icons/star.svg" alt=""
                                                class="product-card__star" />
                                            <span class="product-card__score">3.4</span>
                                        </div>
                                    </article>
                                </div>

                                <!-- Product card 3 -->
                                <div class="col">
                                    <article class="product-card">
                                        <div class="product-card__img-wrap">
                                            <a href="./product-detail.html">
                                                <img src="../../site/assets/img/products/item3.png" alt=""
                                                    class="product-card__thumb" />
                                            </a>
                                            <button class="like-btn like-btn--liked product-card__like-btn">
                                                <img src="../../site/assets/icons/love.svg" alt=""
                                                    class="like-btn__icon icon" />
                                                <img src="../../site/assets/icons/love-red.svg" alt=""
                                                    class="like-btn__icon--liked" />
                                            </button>
                                        </div>
                                        <h3 class="product-card__title">
                                            <a href="./product-detail.html">Lavazza - Caffè Espresso Black Tin - Ground
                                                coffee</a>
                                        </h3>
                                        <p class="product-card__brand">Welikecoffee</p>
                                        <div class="product-card__row">
                                            <span class="product-card__price">$99.99</span>
                                            <img src="../../site/assets/icons/star.svg" alt=""
                                                class="product-card__star" />
                                            <span class="product-card__score">5.0</span>
                                        </div>
                                    </article>
                                </div>

                                <!-- Product card 4 -->
                                <div class="col">
                                    <article class="product-card">
                                        <div class="product-card__img-wrap">
                                            <a href="./product-detail.html">
                                                <img src="../../site/assets/img/products/item4.png" alt=""
                                                    class="product-card__thumb" />
                                            </a>
                                            <button class="like-btn product-card__like-btn">
                                                <img src="../../site/assets/icons/love.svg" alt=""
                                                    class="like-btn__icon icon" />
                                                <img src="../../site/assets/icons/love-red.svg" alt=""
                                                    class="like-btn__icon--liked" />
                                            </button>
                                        </div>
                                        <h3 class="product-card__title">
                                            <a href="./product-detail.html">Qualità Oro Mountain Grown - Espresso Coffee
                                                Beans</a>
                                        </h3>
                                        <p class="product-card__brand">Lavazza</p>
                                        <div class="product-card__row">
                                            <span class="product-card__price">$38.65</span>
                                            <img src="../../site/assets/icons/star.svg" alt=""
                                                class="product-card__star" />
                                            <span class="product-card__score">4.4</span>
                                        </div>
                                    </article>
                                </div>

                                <!-- Product card 5 -->
                                <div class="col">
                                    <article class="product-card">
                                        <div class="product-card__img-wrap">
                                            <a href="./product-detail.html">
                                                <img src="../../site/assets/img/products/item1.png" alt=""
                                                    class="product-card__thumb" />
                                            </a>
                                            <button class="like-btn product-card__like-btn">
                                                <img src="../../site/assets/icons/love.svg" alt=""
                                                    class="like-btn__icon icon" />
                                                <img src="../../site/assets/icons/love-red.svg" alt=""
                                                    class="like-btn__icon--liked" />
                                            </button>
                                        </div>
                                        <h3 class="product-card__title">
                                            <a href="./product-detail.html">Coffee Beans - Espresso Arabica and Robusta
                                                Beans</a>
                                        </h3>
                                        <p class="product-card__brand">Lavazza</p>
                                        <div class="product-card__row">
                                            <span class="product-card__price">$47.00</span>
                                            <img src="../../site/assets/icons/star.svg" alt=""
                                                class="product-card__star" />
                                            <span class="product-card__score">4.3</span>
                                        </div>
                                    </article>
                                </div>

                                <!-- Product card 6 -->
                                <div class="col">
                                    <article class="product-card">
                                        <div class="product-card__img-wrap">
                                            <a href="./product-detail.html">
                                                <img src="../../site/assets/img/products/item2.png" alt=""
                                                    class="product-card__thumb" />
                                            </a>
                                            <button class="like-btn product-card__like-btn">
                                                <img src="../../site/assets/icons/love.svg" alt=""
                                                    class="like-btn__icon icon" />
                                                <img src="../../site/assets/icons/love-red.svg" alt=""
                                                    class="like-btn__icon--liked" />
                                            </button>
                                        </div>
                                        <h3 class="product-card__title">
                                            <a href="./product-detail.html">Lavazza Coffee Blends - Try the Italian
                                                Espresso</a>
                                        </h3>
                                        <p class="product-card__brand">Lavazza</p>
                                        <div class="product-card__row">
                                            <span class="product-card__price">$53.00</span>
                                            <img src="../../site/assets/icons/star.svg" alt=""
                                                class="product-card__star" />
                                            <span class="product-card__score">3.4</span>
                                        </div>
                                    </article>
                                </div>

                                <!-- Product card 7 -->
                                <div class="col">
                                    <article class="product-card">
                                        <div class="product-card__img-wrap">
                                            <a href="./product-detail.html">
                                                <img src="../../site/assets/img/products/item3.png" alt=""
                                                    class="product-card__thumb" />
                                            </a>
                                            <button class="like-btn like-btn--liked product-card__like-btn">
                                                <img src="../../site/assets/icons/love.svg" alt=""
                                                    class="like-btn__icon icon" />
                                                <img src="../../site/assets/icons/love-red.svg" alt=""
                                                    class="like-btn__icon--liked" />
                                            </button>
                                        </div>
                                        <h3 class="product-card__title">
                                            <a href="./product-detail.html">Lavazza - Caffè Espresso Black Tin - Ground
                                                coffee</a>
                                        </h3>
                                        <p class="product-card__brand">Welikecoffee</p>
                                        <div class="product-card__row">
                                            <span class="product-card__price">$99.99</span>
                                            <img src="../../site/assets/icons/star.svg" alt=""
                                                class="product-card__star" />
                                            <span class="product-card__score">5.0</span>
                                        </div>
                                    </article>
                                </div>

                                <!-- Product card 8 -->
                                <div class="col">
                                    <article class="product-card">
                                        <div class="product-card__img-wrap">
                                            <a href="./product-detail.html">
                                                <img src="../../site/assets/img/products/item4.png" alt=""
                                                    class="product-card__thumb" />
                                            </a>
                                            <button class="like-btn product-card__like-btn">
                                                <img src="../../site/assets/icons/love.svg" alt=""
                                                    class="like-btn__icon icon" />
                                                <img src="../../site/assets/icons/love-red.svg" alt=""
                                                    class="like-btn__icon--liked" />
                                            </button>
                                        </div>
                                        <h3 class="product-card__title">
                                            <a href="./product-detail.html">Qualità Oro Mountain Grown - Espresso Coffee
                                                Beans</a>
                                        </h3>
                                        <p class="product-card__brand">Lavazza</p>
                                        <div class="product-card__row">
                                            <span class="product-card__price">$38.65</span>
                                            <img src="../../site/assets/icons/star.svg" alt=""
                                                class="product-card__star" />
                                            <span class="product-card__score">4.4</span>
                                        </div>
                                    </article>
                                </div>

                                <!-- Product card 9 -->
                                <div class="col">
                                    <article class="product-card">
                                        <div class="product-card__img-wrap">
                                            <a href="./product-detail.html">
                                                <img src="../../site/assets/img/products/item1.png" alt=""
                                                    class="product-card__thumb" />
                                            </a>
                                            <button class="like-btn product-card__like-btn">
                                                <img src="../../site/assets/icons/love.svg" alt=""
                                                    class="like-btn__icon icon" />
                                                <img src="../../site/assets/icons/love-red.svg" alt=""
                                                    class="like-btn__icon--liked" />
                                            </button>
                                        </div>
                                        <h3 class="product-card__title">
                                            <a href="./product-detail.html">Coffee Beans - Espresso Arabica and Robusta
                                                Beans</a>
                                        </h3>
                                        <p class="product-card__brand">Lavazza</p>
                                        <div class="product-card__row">
                                            <span class="product-card__price">$47.00</span>
                                            <img src="../../site/assets/icons/star.svg" alt=""
                                                class="product-card__star" />
                                            <span class="product-card__score">4.3</span>
                                        </div>
                                    </article>
                                </div>

                                <!-- Product card 10 -->
                                <div class="col">
                                    <article class="product-card">
                                        <div class="product-card__img-wrap">
                                            <a href="./product-detail.html">
                                                <img src="../../site/assets/img/products/item2.png" alt=""
                                                    class="product-card__thumb" />
                                            </a>
                                            <button class="like-btn product-card__like-btn">
                                                <img src="../../site/assets/icons/love.svg" alt=""
                                                    class="like-btn__icon icon" />
                                                <img src="../../site/assets/icons/love-red.svg" alt=""
                                                    class="like-btn__icon--liked" />
                                            </button>
                                        </div>
                                        <h3 class="product-card__title">
                                            <a href="./product-detail.html">Lavazza Coffee Blends - Try the Italian
                                                Espresso</a>
                                        </h3>
                                        <p class="product-card__brand">Lavazza</p>
                                        <div class="product-card__row">
                                            <span class="product-card__price">$53.00</span>
                                            <img src="../../site/assets/icons/star.svg" alt=""
                                                class="product-card__star" />
                                            <span class="product-card__score">3.4</span>
                                        </div>
                                    </article>
                                </div>

                                <!-- Product card 11 -->
                                <div class="col">
                                    <article class="product-card">
                                        <div class="product-card__img-wrap">
                                            <a href="./product-detail.html">
                                                <img src="../../site/assets/img/products/item3.png" alt=""
                                                    class="product-card__thumb" />
                                            </a>
                                            <button class="like-btn like-btn--liked product-card__like-btn">
                                                <img src="../../site/assets/icons/love.svg" alt=""
                                                    class="like-btn__icon icon" />
                                                <img src="../../site/assets/icons/love-red.svg" alt=""
                                                    class="like-btn__icon--liked" />
                                            </button>
                                        </div>
                                        <h3 class="product-card__title">
                                            <a href="./product-detail.html">Lavazza - Caffè Espresso Black Tin - Ground
                                                coffee</a>
                                        </h3>
                                        <p class="product-card__brand">Welikecoffee</p>
                                        <div class="product-card__row">
                                            <span class="product-card__price">$99.99</span>
                                            <img src="../../site/assets/icons/star.svg" alt=""
                                                class="product-card__star" />
                                            <span class="product-card__score">5.0</span>
                                        </div>
                                    </article>
                                </div>

                                <!-- Product card 12 -->
                                <div class="col">
                                    <article class="product-card">
                                        <div class="product-card__img-wrap">
                                            <a href="./product-detail.html">
                                                <img src="../../site/assets/img/products/item4.png" alt=""
                                                    class="product-card__thumb" />
                                            </a>
                                            <button class="like-btn product-card__like-btn">
                                                <img src="../../site/assets/icons/love.svg" alt=""
                                                    class="like-btn__icon icon" />
                                                <img src="../../site/assets/icons/love-red.svg" alt=""
                                                    class="like-btn__icon--liked" />
                                            </button>
                                        </div>
                                        <h3 class="product-card__title">
                                            <a href="./product-detail.html">Qualità Oro Mountain Grown - Espresso Coffee
                                                Beans</a>
                                        </h3>
                                        <p class="product-card__brand">Lavazza</p>
                                        <div class="product-card__row">
                                            <span class="product-card__price">$38.65</span>
                                            <img src="../../site/assets/icons/star.svg" alt=""
                                                class="product-card__star" />
                                            <span class="product-card__score">4.4</span>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <Script>

        
    </Script>
        
@stop
