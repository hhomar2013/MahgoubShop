<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">{{ __('Home') }}</a>
                    <span></span> {{ __('Sign Up') }}
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">{{ __('Create an Account') }}</h3>
                                        </div>
                                        <form wire:submit.prevent="register">

                                            <div class="form-group">
                                                <label>{{ __('Name') }}</label>
                                                <input wire:model="name" class="form-control @error('name') is-invalid @enderror"  type="text"  name="name" placeholder="Name" autocomplete="false" autofocus/>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>{{ __('Email') }}</label>
                                                <input wire:model="email" class="form-control @error('email') is-invalid @enderror"  type="text"  name="email" placeholder="Email" autocomplete="false"/>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>{{ __('Password') }}</label>
                                                <input wire:model="password" class="form-control @error('password') is-invalid @enderror"  type="password" name="password" placeholder="Password" autocomplete="false">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            {{-- <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="">
                                                        <label class="form-check-label" for="exampleCheckbox12"><span>I agree to terms &amp; Policy.</span></label>
                                                    </div>
                                                </div>
                                                <a href="privacy-policy.html"><i class="fi-rs-book-alt mr-5 text-muted"></i>Lean more</a>
                                            </div> --}}
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up">{{ __('Submit') }} &amp; {{ __('Register') }}</button>
                                            </div>
                                        </form>
                                        <div class="text-muted text-center">{{ __('Already have an account?') }} <a href="{{ route('login') }}">{{ __('Sign in now') }}</a></div>
                                    </div>
                                </div>
                            </div>
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
