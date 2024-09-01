   <div class="header-action-icon-2">
        <a class="mini-cart-icon" href="{{ route('shop.cart') }}">
            <img alt="Surfside Media" src="{{ asset('assets/imgs/theme/icons/icon-cart.svg') }}">
            @if (Cart::instance('cart')->count() > 0)
            <span class="pro-count blue">{{ Cart::instance('cart')->count()}}</span>
            @endif

        </a>

        <div class="cart-dropdown-wrap cart-dropdown-hm2">
            <ul>
                @foreach (Cart::instance('cart')->content() as $items )
                <li>
                    <div class="shopping-cart-img">
                        <a href=""><img alt="Surfside Media" src="{{ asset('assets/imgs/shop/thumbnail-'.$items->model->id.'.jpg') }}"></a>
                    </div>
                    <div class="shopping-cart-title">
                        <h4><a href="product-details.html">{{ $items->model->name }}</a></h4>
                        <h4><span>{{ $items->qty }} × </span>{{'EGP'. $items->model->regular_price }}</h4>
                    </div>
                    <div class="shopping-cart-delete">
                        <a href="#"><i class="fi-rs-cross-small"></i></a>
                    </div>
                </li>
                @endforeach


            </ul>
            <div class="shopping-cart-footer">
                <div class="shopping-cart-total">
                    <h4>Total <span>{{ Cart::instance('cart')->subtotal() }}</span></h4>
                </div>
                <div class="shopping-cart-button">
                    <a href="{{ route('shop.cart') }}" class="outline">View cart</a>
                    <a href="checkout.html">Checkout</a>
                </div>
            </div>
        </div>

    </div>

