<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
        .wishlisted{
            background-color: #F15412 !important;
            border: 1px solid transparent !important;
        }
        .wishlisted i{
            color: #fff !important;
        }
</style>
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">{{ __('Home') }}</a>
                <span></span> {{ __('WishList') }}
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row product-grid-4">
                @forelse (Cart::instance('wishlist')->content() as $item)
                <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('product.details',['slug'=>$item->model->slug]) }}">
                                    <img class="default-img" src="{{ asset('assets/imgs/shop/product-2-1.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/imgs/shop/product-2-2.jpg') }}" alt="">
                                </a>
                            </div>
                            {{-- <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="fi-rs-search"></i></a>
                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                            </div> --}}
                            <div class="product-badges product-badges-position product-badges-mrg">
                                @if (Carbon\Carbon::parse($item->model->created_at)->format('Y-m-d') == Carbon\Carbon::now()->format('Y-m-d'))
                                <span class="new">New</span>
                                @else
                                <span class="sale">sale</span>
                                @endif

                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop.html">Music</a>
                            </div>
                            <h2><a href="product-details.html">{{ $item->model->name }}</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                    <span>90%</span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>{{ $item->model->regular_price }} </span>
                                <span class="old-price">{{ $item->model->regular_price * 10/100 + $item->model->regular_price }}</span>
                            </div>
                            <div class="product-action-1 show">
                                <a aria-label="Remove Form Wishlist"
                                class="action-btn hover-up wishlisted"
                                 href="#"
                                 wire:click.prevent="removeFromWishList({{ $item->model->id }})">
                                 <i class="fi-rs-heart"></i></a>

                                <a aria-label="Add To Cart"
                                class="action-btn hover-up"
                                 href="#"
                                 wire:click.prevent="store({{ $item->model->id }} ,'{{ $item->model->name }}',{{ $item->model->regular_price }})">
                                 <i class="fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <p class="text-center h3 text-danger">{{ __('No results in your wishlist') }}</p>
                @endforelse
            </div>
        </div>
    </section>
</div>
