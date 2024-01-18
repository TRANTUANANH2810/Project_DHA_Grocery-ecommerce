@extends('frontend.layouts.main')

@section('content')


<main class="container home">
            <div class="home__container">
                <!-- SlideShow -->
                <div class="slideshow">
                    <div class="slideshow__inner">
                        <div class="slideshow__item">
                            <a href="#!" class="slideshow__link">
                                <picture>
                                    <source
                                        media="(max-width:767.98px)"
                                        srcset="../../site/assets/img/slideshow/item-1-md.png" />
                                    <img
                                        src="../../site/assets/img/slideshow/img-slideshow.png"
                                        alt="Slideshow"
                                        class="slideshow__img"
                                /></picture>
                            </a>
                        </div>
                    </div>
                    <div class="slideshow__page">
                        <span class="slideshow__num">1</span>
                        <span class="slideshow__slider"></span>
                        <span class="slideshow__num">5</span>
                    </div>
                </div>
            </div>

            <!-- Browse Categogy -->
            <section class="home__container">
                <div class="home__row">
                    <h2 class="home__heading">Browse Categories</h2>
                </div>
                <div class="home__cate row row-cols-3 row-cols-md-1 row-cols-sm-1">
                    <!-- category -item 1 -->
                    <div class="col">
                        <a href="#!">
                            <article class="cate-item">
                                <img src="../../site/assets/img/category-items/cate-item1.png" alt="" class="cate-item__thumb" />

                                <div class="cate-item__info">
                                    <h3 class="cate-item__title">$24 - $150</h3>
                                    <p class="cate-item__desc">New sumatra mandeling coffe blend</p>
                                </div>
                            </article></a
                        >
                    </div>
                    <!-- category -item 2 -->
                    <div class="col">
                        <a href="#!">
                            <article class="cate-item">
                                <img src="../../site/assets/img/category-items/cate-item2.png" alt="" class="cate-item__thumb" />

                                <div class="cate-item__info">
                                    <h3 class="cate-item__title">$37 - $160</h3>
                                    <p class="cate-item__desc">Espresso arabica and robusta beans</p>
                                </div>
                            </article>
                        </a>
                    </div>
                    <!-- category -item 3 -->
                    <div class="col">
                        <a href="#!"
                            ><article class="cate-item">
                                <img src="../../site/assets/img/category-items/cate-item3.png" alt="" class="cate-item__thumb" />

                                <div class="cate-item__info">
                                    <h3 class="cate-item__title">$32 - $160</h3>
                                    <p class="cate-item__desc">Lavazza top class whole bean coffee blend</p>
                                </div>
                            </article></a
                        >
                    </div>
                </div>
            </section>

            <!-- Browse Products -->
            <section class="home__container">
                <div class="home__row">
                    <h2 class="home__heading">Total LavAzza 1320</h2>

                    <div class="filter-wrap">
                            <label for="amount" style="font-weight: 400; font-size:15px; margin-bottom: 25px;">Filter</label>
                            <br>
                            <form action="{{ route('products.filter') }}" method="GET">
                                
                                <div id="price-slider" style="font-weight: 400; font-size:15px; margin-top: 5px;" ></div>
                                <input type="hidden" name="min_price" id="min_price" value="{{ $selectedMinPrice }}">
                                <input type="hidden" name="max_price" id="max_price" value="{{ $selectedMaxPrice }}">
                                <br>
                                <span style="font-weight: 400; font-size:15px" id="price-display">Price Range: ${{ $selectedMinPrice }} - ${{ $selectedMaxPrice }}</span>

                                <input type="submit" name="filter_price" value="lọc" class=" btn--primary" style="width:30px;height:30px">
                            </form>
                            <img src="../../site/assets/icons/filter.svg" alt="" class="icon filter-btn__icon" />

                        <div id="home-filter" class="filter hide">
                            <img src="../../site/assets/icons/arrow-up.png" alt="" class="filter__arrow" />
                            <h3 class="filter__heading">Filter</h3>
                            <form action="" class="filter__form form">
                                <div class="filter__row filter__content">
                                    <!-- filter column 1 -->
                                    <div class="filter__col">
                                        <label for="" class="form__label"> Price </label>
                                        <div class="filter__form-group">
                                            <div
                                                class="filter__form-slider"
                                                style="--min-value: 10%; --max-value: 60%"
                                            ></div>
                                        </div>

                                        <div class="filter__form-group filter__form-group--inline">
                                            <div>
                                                <label for="" class="form__label form__label--small"> Minimum </label>
                                                <div class="filter__form-text-input filter__form-text-input--small">
                                                    <input type="text" value="$30.00" class="filter__form-input" />
                                                </div>
                                            </div>
                                            <div>
                                                <label for="" class="form__label form__label--small"> Maximum </label>
                                                <div class="filter__form-text-input filter__form-text-input--small">
                                                    <input type="text" value="$100.00" class="filter__form-input" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="filter__separate"></div>

                                    <!-- filter column 2 -->
                                    <div class="filter__col">
                                        <label for="" class="form__label"> Size/Weight </label>
                                        <div class="filter__form-group">
                                            <div class="form__select-wrap">
                                                <div class="form__select" style="--width: 158px">
                                                    500g
                                                    <img
                                                        src="../../site/assets/icons/select-arrow.svg"
                                                        alt=""
                                                        class="icon form__select-arown"
                                                    />
                                                </div>
                                                <div class="form__select">
                                                    Gram
                                                    <img
                                                        src="../../site/assets/icons/select-arrow.svg"
                                                        alt=""
                                                        class="icon form__select-arown"
                                                    />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="filter__form-group">
                                            <div class="form__tags">
                                                <button class="form__tag">Small</button>
                                                <button class="form__tag">Medium</button>
                                                <button class="form__tag">Large</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="filter__separate"></div>

                                    <!-- filter column 3 -->
                                    <div class="filter__col">
                                        <label for="" class="form__label">Brand </label>
                                        <div class="filter__form-group">
                                            <div class="filter__form-text-input">
                                                <input
                                                    type="text"
                                                    placeholder="Search brand name"
                                                    class="filter__form-input"
                                                />
                                                <img
                                                    src="../../site/assets/icons/search.svg"
                                                    alt=""
                                                    class="icon filter__form-input-icon"
                                                />
                                            </div>
                                        </div>

                                        <div class="filter__form-group">
                                            <div class="form__tags">
                                                <button class="form__tag">Lavazza</button>
                                                <button class="form__tag">Nescafe</button>
                                                <button class="form__tag">Starbucks</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter__row filter__footer">
                                    <button class="btn btn--text filter__cancel js-toggle" toggle-target="#home-filter">
                                        Cancel
                                    </button>
                                    <button
                                        class="btn btn--primary filter__submit js-toggle"
                                        toggle-target="#home-filter"
                                    >
                                        Show Result
                                    </button>
                                    <!-- <button class="btn">Normal</button> -->
                                    <!-- <button class="btn btn--outline">Outline</button>
                                    <button class="btn btn--rounded btn--primary">Rounded</button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-4 row-cols-lg-2 row-cols-sm-1 g-3">
                    <!-- Product card  1 -->
                    <!-- <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="">
                                    <img class="product-card__thumb" src="../../site/assets/img/products/item1.png" alt="" />
                                </a>
                                <button class="like-btn like-btn--liked product-card__like-btn">
                                    <img src="../../site/assets/icons/love.svg" alt="" class="icon like-btn__icon" />
                                    <img src="../../site/assets/icons/love-red.svg" alt="" class="like-btn__icon--liked" />
                                </button>
                            </div>
                            <h3 class="product-card__title">
                                <a href="">Coffee Beans - Espresso Arabica and Robusta Beans</a>
                            </h3>
                            <p class="product-card__brand">Lavazza</p>
                            <div class="product-card__row">
                                <span class="product-card__price">$47.00</span>
                                <img src="../../site/assets/icons/star.svg" alt="" class="product-card__star" />
                                <span class="product-card__score">4.3</span>
                            </div>
                        </article>
                    </div> -->

                    <!-- Product card  2 -->
                    @foreach($ShowProducts as $item)
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="{{route('detail',$item->slug)}}">
                                    <img class="product-card__thumb" src="{{$item->image}}" alt="" />
                                </a>
                                <button class="like-btn product-card__like-btn">
                                    <img src="../../site/assets/icons/love.svg" alt="" class="like-btn__icon" />
                                    <img src="../../site/assets/icons/love-red.svg" alt="" class="like-btn__icon--liked" />
                                </button>
                            </div>
                            <h3 class="product-card__title">
                                <a href="{{route('detail', $item->slug)}}">{{$item->name}}</a>
                            </h3>
                            <p class="product-card__brand">{{$item->seller->shop_name}}</p>
                            <div class="product-card__row">
                                <span class="product-card__price">${{$item->price}}</span>
                                <img src="../../site/assets/icons/star.svg" alt="" class="product-card__star" />
                                <span class="product-card__score">3.4</span>
                            </div>
                        </article>
                    </div>
                    @endforeach
                
                   
                </div>
            </section>
        </main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
        <script type="text/javascript">
            // $(document).ready(function(){
            //     $( "#slider-range" ).slider({
            //     orientation: "horizontal",
            //     range: true,
            //     min: {{$minPrice}},
            //     max: {{$maxPrice}},
            //     steps: 5,
            //     values: [ {{$minPrice}}, {{$maxPrice}} ],
            //     slide: function( event, ui ) {
            //         $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            //         $( "#start_price" ).val(ui.values[ 0 ]);
            //         $( "#end_price" ).val(ui.values[ 1 ]);
            //     }
            //     });
            //     $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            //     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
            // });
            $( function() {
            $( "#price-slider" ).slider({
                range: true,
                min: 1,
                max: 10000,
                values: [ {{ $minPrice }}, {{ $maxPrice }} ],
                slide: function( event, ui ) {
                    $( "#min_price" ).val( ui.values[0] );
                    $( "#max_price" ).val( ui.values[1] );
                    $( "#price-display" ).html("Price Range: $" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $( "#min_price" ).val( $( "#price-slider" ).slider( "values", 0 ) );
            $( "#max_price" ).val( $( "#price-slider" ).slider( "values", 1 ) );
        } );
        </script>
@stop();