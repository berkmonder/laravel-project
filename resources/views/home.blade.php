@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4">
              <div class="iq-card">
                  <div class="iq-card-body pl-0 pr-0 pt-0">
                      <div class="doctor-details-block">
                          <div class="doc-profile-bg bg-primary" style="height:150px;">
                          </div>
                          <div class="doctor-profile text-center">
                              <img src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="profile-img" class="avatar-130 img-fluid">
                          </div>
                          <div class="text-center mt-3 pl-3 pr-3">
                              <h4><b>{{ auth()->user()->name }}</b></h4>
                          </div>
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
                              <div class="col-8">{{ auth()->user()->name }}</div>
                              <div class="col-4">User Id</div>
                              <div class="col-8">{{ auth()->user()->id }}</div>
                              <div class="col-4">Position:</div>
                              <div class="col-8">Senior doctor</div>
                              <div class="col-4">Email:</div>
                              <div class="col-8"><a href="mailto:biniJets24@demo.com"> {{ auth()->user()->email }} </a></div>
                              <div class="col-4">Member Id</div>
                              <div class="col-8"><a href="tel:001-2351-25612">{{ auth()->user()->memberId }}</a></div>
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
                          <li class="col-md-4 col-6 pb-3">
                              <a href="javascript:void();">
                                  <img src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="gallary-image" class="img-fluid">
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-lg-8">
              <div class="row">
                  <div class="col-md-12">
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
