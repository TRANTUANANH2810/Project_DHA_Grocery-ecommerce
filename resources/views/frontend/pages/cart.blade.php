@if($newCart != null)
<p>ok</p>
@endif
<div class="row row-cols-3 gx-2 act-dropdown__list">
    <!-- Cart preview item 1 -->
    <div class="col">
        <article class="cart-preview-item">
            <div class="cart-preview-item__img-wrap">
                <img src="../../site/assets/img/Products/item1.png" alt="" class="cart-preview-item__thumb" />
            </div>
            <h3 class="cart-preview-item__title">Lavazza Coffee Blends</h3>
            <p class="cart-preview-item__price">$329.00</p>
        </article>
    </div>

    <!-- Cart preview item 2 -->
    <div class="col">
        <article class="cart-preview-item">
            <div class="cart-preview-item__img-wrap">
                <img src="../../site/assets/img/Products/item2.png" alt="" class="cart-preview-item__thumb" />
            </div>
            <h3 class="cart-preview-item__title">Coffee Beans Espresso</h3>
            <p class="cart-preview-item__price">$39.99</p>
        </article>
    </div>


</div>
<div class="act-dropdown__bottom">
    <div class="act-dropdown__row">
        <span class="act-dropdown__label">Subtotal</span>
        <span class="act-dropdown__value">$415.99</span>
    </div>
    <div class="act-dropdown__row">
        <span class="act-dropdown__label">Texes</span>
        <span class="act-dropdown__value">Free</span>
    </div>
    <div class="act-dropdown__row">
        <span class="act-dropdown__label">Shipping</span>
        <span class="act-dropdown__value">$10.00</span>
    </div>
    <div class="act-dropdown__row act-dropdown__row--bold">
        <span class="act-dropdown__label">Total Price</span>
        <span class="act-dropdown__value">$425.99</span>
    </div>
</div>
<div class="act-dropdown__checkout">
    <a href="{{route('home.checkout')}}" class="btn btn--primary btn--rounded act-dropdown__checkout-btn">
        Check Out All
    </a>
</div>