@extends('layouts.app')

@section('content')
<section class="sign-in-page">
    <div class="container sign-in-page-bg mt-5 p-0">
        <div class="row no-gutters">
            <div class="col-md-6 text-center">
                <div class="sign-in-detail text-white">
                    <a class="sign-in-logo mb-5" href="#"><img src="images/logo-white.png" class="img-fluid" alt="logo"></a>
                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                        <div class="item">
                            <img src="images/login/1.png" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                        <div class="item">
                            <img src="images/login/2.png" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                        <div class="item">
                            <img src="images/login/3.png" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <div class="sign-in-from">
                    <h1 class="mb-0">Sign in</h1>
                    <p>Enter your email address and password to access admin panel.</p>
                    <form class="mt-4" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('Email address') }}</label>
                            <input id="email" type="email" class="form-control mb-0 @error('email') is-invalid @enderror" placeholder="Enter email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error ('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            {{-- <a href="{{ route('password') }}" class="float-right">Forgot password?</a> --}}
                            <input id="password" type="password" class="form-control mb-0 @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                            @error ('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-inline-block w-100">
                            <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                <input id="remember" type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">{{ __('Login') }}</button>

                            @if (Route::has('password'))
                                <a class="btn btn-link" href="{{ route('password') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        <div class="sign-info">
                            <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="/register">Sign up</a></span>
                            <ul class="iq-social-media">
                                <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
