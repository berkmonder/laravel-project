@extends('layouts.app')

@section('title', 'Profiles')

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
                            <h4><b> {{ auth()->user()->name }} </b></h4>
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
                            <div class="col-4">Last Name:</div>
                            <div class="col-8"></div>
                            <div class="col-4">Age:</div>
                            <div class="col-8"></div>
                            <div class="col-4">Email:</div>
                            <div class="col-8"><a href="mailto:biniJets24@demo.com"> {{ auth()->user()->email }} </a></div>
                            <div class="col-4">Phone:</div>
                            <div class="col-8"><a href="tel:001-2351-25612"></a></div>
                            <div class="col-4">Location:</div>
                            <div class="col-8"></div>
                        </div>
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
</div>
@endsection
