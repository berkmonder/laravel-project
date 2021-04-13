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
                                        <img src="images/user/11.png" alt="profile-img" class="avatar-130 img-fluid">
                                    </div>
                                    <div class="text-center mt-3 pl-3 pr-3">
                                        <h4><b> {{  }} </b></h4>
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
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Photos</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                                    <li class="col-md-4 col-6 pb-3"><a href="javascript:void();"><img src="images/page-img/g1.jpg" alt="gallary-image" class="img-fluid"></a></li>
                                    <li class="col-md-4 col-6 pb-3"><a href="javascript:void();"><img src="images/page-img/g2.jpg" alt="gallary-image" class="img-fluid"></a></li>
                                    <li class="col-md-4 col-6 pb-3"><a href="javascript:void();"><img src="images/page-img/g3.jpg" alt="gallary-image" class="img-fluid"></a></li>
                                    <li class="col-md-4 col-6 pb-3"><a href="javascript:void();"><img src="images/page-img/g4.jpg" alt="gallary-image" class="img-fluid"></a></li>
                                    <li class="col-md-4 col-6 pb-3"><a href="javascript:void();"><img src="images/page-img/g5.jpg" alt="gallary-image" class="img-fluid"></a></li>
                                    <li class="col-md-4 col-6 pb-3"><a href="javascript:void();"><img src="images/page-img/g6.jpg" alt="gallary-image" class="img-fluid"></a></li>
                                    <li class="col-md-4 col-6 pb-0"><a href="javascript:void();"><img src="images/page-img/g7.jpg" alt="gallary-image" class="img-fluid"></a></li>
                                    <li class="col-md-4 col-6 pb-0"><a href="javascript:void();"><img src="images/page-img/g8.jpg" alt="gallary-image" class="img-fluid"></a></li>
                                    <li class="col-md-4 col-6 pb-0"><a href="javascript:void();"><img src="images/page-img/g9.jpg" alt="gallary-image" class="img-fluid"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Speciality</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <ul class="speciality-list m-0 p-0">
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><a href="#" class="iq-bg-primary"><i class="ri-award-fill"></i></a></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>professional</h6>
                                                    <p class="mb-0">Certified Skin Treatment</p>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><a href="#" class="iq-bg-warning"><i class="ri-award-fill"></i></a></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Certified</h6>
                                                    <p class="mb-0">Cold Laser Operation</p>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 align-items-center">
                                                <div class="user-img img-fluid"><a href="#" class="iq-bg-info"><i class="ri-award-fill"></i></a></div>
                                                <div class="media-support-info ml-3">
                                                    <h6>Medication Laser</h6>
                                                    <p class="mb-0">Hair Lose Product</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Notifications</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <ul class="iq-timeline">
                                            <li>
                                                <div class="timeline-dots border-success"></div>
                                                <h6 class="">Dr. Joy Send you Photo</h6>
                                                <small class="mt-1">23 November 2019</small>
                                            </li>
                                            <li>
                                                <div class="timeline-dots border-danger"></div>
                                                <h6 class="">Reminder : Opertion Time!</h6>
                                                <small class="mt-1">20 November 2019</small>
                                            </li>
                                            <li>
                                                <div class="timeline-dots border-primary"></div>
                                                <h6 class="mb-1">Patient Call</h6>
                                                <small class="mt-1">19 November 2019</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Schedule</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <ul class="list-inline m-0 p-0">
                                            <li>
                                                <h6 class="float-left mb-1">Ruby saul (Blood Check)</h6>
                                                <small class="float-right mt-1">Today</small>
                                                <div class="d-inline-block w-100">
                                                    <p class="badge badge-primary">09:00 AM </p>
                                                </div>
                                            </li>
                                            <li>
                                                <h6 class="float-left mb-1">  Anna Mull (Fever)</h6>
                                                <small class="float-right mt-1">Today</small>
                                                <div class="d-inline-block w-100">
                                                    <p class="badge badge-danger">09:15 AM </p>
                                                </div>
                                            </li>
                                            <li>
                                                <h6 class="float-left mb-1">Petey Cruiser (X-ray)</h6>
                                                <small class="float-right mt-1">Today</small>
                                                <div class="d-inline-block w-100">
                                                    <p class="badge badge-warning">10:00 AM </p>
                                                </div>
                                            </li>
                                            <li>
                                                <h6 class="float-left mb-1">Anna Sthesia (Full body Check up)</h6>
                                                <small class="float-right mt-1">Today</small>
                                                <div class="d-inline-block w-100">
                                                    <p class="badge badge-info">01:00 PM </p>
                                                </div>
                                            </li>
                                            <li>
                                                <h6 class="float-left mb-1">Paul Molive (Operation)</h6>
                                                <small class="float-right mt-1">Tomorrow</small>
                                                <div class="d-inline-block w-100">
                                                    <p class="badge badge-success">09:00 AM </p>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Patients Notes</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <ul class="list-inline m-0 p-0">
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div>
                                                    <h6>Treatment was good!</h6>
                                                    <p class="mb-0">Eye Test </p>
                                                </div>
                                                <div><a href="/member" class="btn iq-bg-primary">Open</a></div>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div>
                                                    <h6>My Helth in better Now</h6>
                                                    <p class="mb-0">Fever Test</p>
                                                </div>
                                                <div><a href="#" class="btn iq-bg-primary">Open</a></div>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div>
                                                    <h6>No Effacted</h6>
                                                    <p class="mb-0">Thyroid Test</p>
                                                </div>
                                                <div><a href="#" class="btn iq-bg-danger">Close</a></div>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div>
                                                    <h6>Operation Successfull</h6>
                                                    <p class="mb-0">Orthopaedic</p>
                                                </div>
                                                <div><a href="#" class="btn iq-bg-primary">Open</a></div>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div>
                                                    <h6>Mediacal Care is just a click away</h6>
                                                    <p class="mb-0">Join Pain </p>
                                                </div>
                                                <div><a href="#" class="btn iq-bg-danger">Close</a></div>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h6>Treatment is good</h6>
                                                    <p class="mb-0">Skin Treatment </p>
                                                </div>
                                                <div><a href="#" class="btn iq-bg-primary">Open</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Education</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <table class="table mb-0 table-borderless">
                                            <thead>
                                            <tr>
                                                <th scope="col">Year</th>
                                                <th scope="col">Degree</th>
                                                <th scope="col">Institute</th>
                                                <th scope="col">Result</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>2010</td>
                                                <td>MBBS, M.D</td>
                                                <td>University of Wyoming</td>
                                                <td><span class="badge badge-success">Distinction</span></td>
                                            </tr>
                                            <tr>
                                                <td>2014</td>
                                                <td>M.D. of Medicine</td>
                                                <td>Netherland Medical College</td>
                                                <td><span class="badge badge-success">Distinction</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Experience</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <table class="table mb-0 table-borderless">
                                            <thead>
                                            <tr>
                                                <th scope="col">Year</th>
                                                <th scope="col">Department</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Hospital</th>
                                                <th scope="col">Feedback</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>2014 - 2018</td>
                                                <td>MBBS, M.D</td>
                                                <td>Senior doctor</td>
                                                <td>Midtown Medical Clinic</td>
                                                <td><span class="badge badge-primary">Good</span></td>
                                            </tr>
                                            <tr>
                                                <td>2018 - 2020</td>
                                                <td>M.D. of Medicine</td>
                                                <td>Associate Prof.</td>
                                                <td>Netherland Medical College</td>
                                                <td><span class="badge badge-success">excellence</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
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
