@extends('frontend.layouts.main')
@section('content')
<main class="checkout-page">
    <div class="container">
        <!-- Search bar -->
        <div class="checkout-container">
            <div class="search-bar d-none d-md-flex">
                <input type="text" name="" id="" placeholder="Search for item" class="search-bar__input" />
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
                        <div class="cart-info__list">
                            @if(Session::has("Cart") != null)
                            @foreach(Session::get("Cart")->products as $item)
                            <!-- Cart item 1 -->
                            <article class="cart-item">
                                <a href="./product-detail.html">
                                    <img src="{{$item['productInfo']->image}}" alt="" class="cart-item__thumb" />
                                </a>
                                <div class="cart-item__content">
                                    <div class="cart-item__content-left">
                                        <h3 class="cart-item__title">
                                            <a href="./product-detail.html">
                                                {{$item['productInfo']->name}}
                                            </a>
                                        </h3>
                                        <p class="cart-item__price-wrap">
                                            ${{$item['productInfo']->price}}
                                        </p>
                                        <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                            <div class="cart-item__input">
                                            <input class="cart-item__input-text" id="quanty-item-{{$item['productInfo']->id}}" type="text" value="{{$item['quanty']}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item__content-right">
                                        <p class="cart-item__total-price">${{$item['price']}}</p>
                                        <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                            <button class="cart-item__ctrl-btn" onclick="SaveListItemCart({{$item['productInfo']->id}})">
                                                <img src="site/assets/icons/heart-2.svg" alt="" />
                                                Save
                                            </button>
                                            <button class="cart-item__ctrl-btn js-toggle"
                                                toggle-target="#delete-confirm" onclick="DeleteListItemCart({{$item['productInfo']->id}})">
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
                            @if(Session::get("Cart") != null)
                                <h2 class="act-dropdown__title">You have <span id="total-quanty-show">{{Session::get("Cart")->totalQuanty}}</span>
                                    item(s)</h2>
                                @else
                                <h2 class="act-dropdown__title">You have <span id="total-quanty-show">0</span> item(s)</h2>
                            @endif
                        </div>
                        <div class="cart-info__row">
                            <span>Price <span class="cart-info__sub-label">(Total)</span></span>
                            @if(Session::get("Cart") != null)

                                <span>${{Session::get("Cart")->totalPrice}}</span>
                            @else
                                <span>0</span>
                            
                            @endif
                        </div>
                        <a href="./shipping.html" class="cart-info__next-btn btn btn--primary btn--rounded">
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
</main>
<Script>
    function DeleteListItemCart(id){
        console.log(id);
        $.ajax({
            url: 'Delete-Item-List-Cart/'+id,
            type: 'GET',
        }).done(function(response) {
             RenderListCart(response);
             alertify.success('Xóa sản phẩm thành công');
         });
    }

    function SaveListItemCart(id){
        console.log(id);
       
        $.ajax({
            url: 'Save-Item-List-Cart/'+id+'/'+$("#quanty-item-"+id).val(),
            type: 'GET',
        }).done(function(response) {
             RenderListCart(response);
             alertify.success('Đã lưu thành công');
         });
    }



    function RenderListCart(response){
            $("#list-cart").empty();
            $("#list-cart").html(response);
        }

</Script>
@stop();