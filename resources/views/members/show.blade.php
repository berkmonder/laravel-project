@extends('layouts.app')

@section('title', 'Members')

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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="iq-card">
                            <div class="iq-card-body pl-0 pr-0 pt-0">
                                <div class="doctor-details-block">
                                    <div class="doc-profile-bg bg-primary" style="height:150px;">
                                    </div>
                                    <div class="doctor-profile text-center">
                                        <img src="{{ asset('images/user/11.png') }}" alt="profile-img" class="avatar-130 img-fluid">
                                    </div>
                                    <div class="text-center mt-3 pl-3 pr-3">
                                        <h4><b> {{ $members->name }} </b></h4>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repudiandae eveniet harum.</p>
                                    </div>
                                    <hr>
                                    <ul class="doctoe-sedual d-flex align-items-center justify-content-between p-0 m-0">
                                        <li class="text-center">
                                            <h3 class="counter">4500</h3>
                                            <span>asd</span>
                                        </li>
                                        <li class="text-center">
                                            <h3 class="counter">100</h3>
                                            <span>asd</span>
                                        </li>
                                        <li class="text-center">
                                            <h3 class="counter">10000</h3>
                                            <span>asd</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="list-inline m-0 p-0">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div><a href="/members" class="btn iq-bg-primary">Members</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                   <div class="iq-card">
                      <div class="iq-card-body text-center">
                         <div class="iq-doc-social-info mt-3 mb-3">
                            <ul class="m-0 p-0 list-inline">
                               <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                               <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                               <li><a href="#"><i class="ri-instagram-fill"></i></a> </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
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
                              <li><a href="#"><i class="ri-instagram-fill"></i></a> </li>
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
