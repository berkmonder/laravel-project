@extends('layouts.app')

@section('title', 'Profiles')

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
                                        <img src={{ asset("images/user/11.png") }} alt="profile-img" class="avatar-130 img-fluid">
                                    </div>
                                    <div class="text-center mt-3 pl-3 pr-3">
                                        <h4><b> {{ $profile->name }} </b></h4>
                                        <p>Doctor</p>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repudiandae eveniet harum.</p>
                                    </div>
                                    <hr>
                                    <ul class="doctoe-sedual d-flex align-items-center justify-content-between p-0 m-0">
                                        <li class="text-center">
                                            <h3 class="counter">4500</h3>
                                            <span>Operations</span>
                                        </li>
                                        <li class="text-center">
                                            <h3 class="counter">100</h3>
                                            <span>Hospital</span>
                                        </li>
                                        <li class="text-center">
                                            <h3 class="counter">10000</h3>
                                            <span>Patients</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Personal Information</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div class="about-info m-0 p-0">
                                    <div class="row">
                                        <div class="col-4">First Name:</div>
                                        <div class="col-8">Bini</div>
                                        <div class="col-4">Last Name:</div>
                                        <div class="col-8">Jets</div>
                                        <div class="col-4">Age:</div>
                                        <div class="col-8">27</div>
                                        <div class="col-4">Position:</div>
                                        <div class="col-8">Senior doctor</div>
                                        <div class="col-4">Email:</div>
                                        <div class="col-8"><a href="mailto:biniJets24@demo.com"> biniJets24@demo.com </a></div>
                                        <div class="col-4">Phone:</div>
                                        <div class="col-8"><a href="tel:001-2351-25612">001 2351 256 12</a></div>
                                        <div class="col-4">Location:</div>
                                        <div class="col-8">USA</div>
                                    </div>
                                </div>
                            </div>
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
                        <div class="col-lg-6 text-right">
                            Copyright 2020 <a href="#">XRay</a> All Rights Reserved.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer END -->
        </div>
    </div>
    <!-- Wrapper END -->
@endsection
