@extends('layouts.app')

@section('title', 'Üyelik Sistemi')

@section('content')
    {{-- <h1>Üyelikler</h1>

    <ul>
        @forelse($members as $member)
            <li> {{ $member->name }} </li>
        @empty
            <li>No members available.</li>
        @endforelse
    </ul> --}}

    <!-- Wrapper Start -->
    <div class="wrapper">
       <!-- Sidebar  -->
        @include ('sbar')
       <!-- Page Content  -->
       <div id="content-page" class="content-page">
          <!-- TOP Nav Bar -->
            @include ('nav')
          <!-- TOP Nav Bar END -->
          <div class="container-fluid">
             <div class="row">
                <div class="col-sm-12">
                   <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title">Members List</h4>
                         </div>
                      </div>
                   </div>
                </div>
                {{-- @foreach ($members as $member)
                  <td>
                     <div class="iq-media-group">
                        <a href="#" class="iq-media">
                        <img class="img-fluid avatar-40 rounded-circle" src="images/user/05.jpg" alt="">
                        </a>
                        <a href="#" class="iq-media">
                        <img class="img-fluid avatar-40 rounded-circle" src="images/user/06.jpg" alt="">
                        </a>
                        <a href="#" class="iq-media">
                        <img class="img-fluid avatar-40 rounded-circle" src="images/user/07.jpg" alt="">
                        </a>
                     </div>
                  </td>
                @endforeach --}}
                @foreach ($members as $member)
                  <div class="col-sm-6 col-md-3">
                     <div class="iq-card">
                        <div class="iq-card-body text-center">
                           <div class="doc-profile">
                              <img class="rounded-circle img-fluid avatar-80" src="images/user/12.jpg" alt="profile">
                           </div>
                           <div class="iq-doc-info mt-3">
                              <h4> {{ $member->name }} </h4>
                              <p class="mb-0" >{{ $member->id }}</p>
                           </div>
                           <div class="iq-doc-description mt-2">
                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                           </div>
                           <div class="iq-doc-social-info mt-3 mb-3">
                              <ul class="m-0 p-0 list-inline">
                                 <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                 <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                                 <li><a href="#"><i class="ri-instagram-fill"></i></a></li>
                              </ul>
                           </div>
                           <a href="/members/{{ $member->id }}" class="btn btn-primary">View Profile</a>
                        </div>
                     </div>
                  </div>
                @endforeach

                {{-- @foreach($questionnaire->questions as $question)
                    <div class="card mt-4">
                        <div class="card-header">{{ $question->question }}</div>

                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($question->answers as $answer)
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>{{ $answer->answer }}</div>
                                        @if($question->responses->count())
                                            <div>{{ intval(($answer->responses->count() * 100) / $question->responses->count()) }}%</div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="card-footer">
                            <form action="/questionnaires/{{ $questionnaire->id }}/questions/{{ $question->id }}" method="post">
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete Question</button>
                            </form>
                        </div>
                    </div>
                @endforeach --}}

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
