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
                    <h1 class="mb-0">Sign Up</h1>
                    <form class="mt-4" method="POST" action="{{ route('register') }}">
                      @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control mb-0 @error('name') is-invalid @enderror" name="name" placeholder="Your Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error ('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="member">{{ __('Member') }}</label>
                            <input id="member" type="text" class="form-control mb-0 @error('member') is-invalid @enderror" name="member" placeholder="Member" value="{{ old('member') }}" required autocomplete="member" autofocus>

                            @error ('member')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control mb-0 @error('email') is-invalid @enderror" name="email" placeholder="Enter email" value="{{ old('email') }}" required autocomplete="email">

                            @error ('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control mb-0" placeholder="Password" name="password" required autocomplete="new-password">
                        </div>

                        <div class="d-inline-block w-100">
                            <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                <input id="customCheck" type="checkbox" class="custom-control-input">
                                <label class="custom-control-label" for="customCheck">I accept <a href="#">Terms and Conditions</a></label>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">{{ __('Register') }}</button>
                        </div>
                        <div class="sign-info">
                            <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="/login">Log In</a></span>
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
