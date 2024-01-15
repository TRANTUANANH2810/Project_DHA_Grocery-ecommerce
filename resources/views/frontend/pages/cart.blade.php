@if (Session::has('Cart') != null)
    <div class="row row-cols-3 gx-2 act-dropdown__list">
        <!-- Cart preview item 1 -->
        <!-- ../../site/assets/img/Products/item1.png -->
        <div class="col">
            @foreach (Session::get('Cart')->products as $item)
                <article class="cart-preview-item">
                    <div class="cart-preview-item__img-wrap">
                        <img src="{{ $item['productInfo']->image }}" alt="" class="cart-preview-item__thumb" />
                    </div>
                    <h3 class="cart-preview-item__title">{{ $item['productInfo']->name }}</h3>
                    <p class="cart-preview-item__price">${{ $item['productInfo']->price }}</p>
                    <p class="cart-preview-item__quanty">x{{ $item['quanty'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
    <div class="act-dropdown__bottom">
        <div class="act-dropdown__row act-dropdown__row--bold">
            <span class="act-dropdown__label">Total Price</span>
            <span class="act-dropdown__value">${{ Session::get('Cart')->totalPrice }}</span>
            <input hidden type="number" name="" id="total-quanty-cart"
                value="{{ Session::get('Cart')->totalQuanty }}">
        </div>
    </div>
@elseif ($cart != null && $listCartDetail != null)
    <div class="row row-cols-3 gx-2 act-dropdown__list">
        <div class="col">
            @foreach ($listCartDetail as $item)
                <article class="cart-preview-item">
                    <div class="cart-preview-item__img-wrap">
                        <img src="{{ $item->product->image }}" alt="" class="cart-preview-item__thumb" />
                    </div>
                    <h3 class="cart-preview-item__title">{{ $item->product->name }}</h3>
                    <p class="cart-preview-item__price">${{ $item->price }}</p>
                    <p class="cart-preview-item__quanty">x{{ $item->qty }}</p>
                </article>
            @endforeach
        </div>
    </div>
    <div class="act-dropdown__bottom">
        <div class="act-dropdown__row act-dropdown__row--bold">
            <span class="act-dropdown__label">Total Price</span>
            <span class="act-dropdown__value">${{ $cart->total_price }}</span>
            <input hidden type="number" name="" id="total-quanty-cart"
                value="{{ $cart->qty }}">
        </div>
    </div>
@endif
