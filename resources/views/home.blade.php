@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
          @include('sbar')
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <!-- TOP Nav Bar -->
              @include('nav')
            <!-- TOP Nav Bar END -->
            <!-- Footer -->
            <footer class="bg-white iq-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                            </ul>
                        </div>
                        <div class="iq-doc-social-info text-center">
                           <ul class="m-0 p-0 list-inline">
                              <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                              <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                              <li><a href="#"><i class="ri-youtube-fill"></i></a></li>
                           </ul>
                        </div>
                        <div class="col-lg-6 text-right">
                            Copyright 2020 <a href="#">Royiva</a> All Rights Reserved.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer END -->
        </div>
    </div>
    <!-- Wrapper END -->
@endsection


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
