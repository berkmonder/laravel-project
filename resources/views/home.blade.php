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
            <!-- Body -->
              @include('body')
            <!-- Body End -->

            <!-- Footer -->
            <footer class="bg-white iq-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-inline mb-0">

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
