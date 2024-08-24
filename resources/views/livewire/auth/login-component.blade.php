<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">{{ __('Home') }}</a>
                    <span></span> {{ __('Log In') }}
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">{{ __('Log In') }}</h3>
                                        </div>
                                        <form wire:submit.prevent="login">
                                            <div class="form-group">
                                                <label for="email" class="">{{ __('Email') }}</label>
                                                <input wire:model="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror"   autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="Password" class="">{{ __('Password') }}</label>
                                                <input wire:model="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" >

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input wire:model="remember" class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                                        <label class="form-check-label" for="exampleCheckbox1"><span>{{ __('Remember me') }}</span></label>
                                                    </div>
                                                </div>
                                                <a class="text-muted" href="#">{{ __('Forgot password?') }}</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">
                                                    {{ __('login') }}
                                                    <div wire:loading wire:target="login" class="spinner-grow  text-warning text-sm" role="status">
                                                        <span class="visually-hidden"></span>
                                                    </div>
                                                </button>
                                            </div>
                                        </form>





                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-6">
                               <img src="{{ asset('assets/imgs/login.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
