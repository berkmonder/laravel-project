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
                @foreach ($members1 as $member1)
                  <div class="col-sm-6 col-md-3">
                     <div class="iq-card">
                        <div class="iq-card-body text-center">
                           <div class="doc-profile">
                              <a href="/members/{{ $member1->id }}"><img class="rounded-circle img-fluid avatar-80" src="{{ "/storage/images/".$member1->image }}" alt="profile"></a>
                           </div>
                           <div class="iq-doc-info mt-3">
                              <h4> {{ $member1->name }} </h4>
                              <p class="mb-0" >{{ $member1->id }}</p>
                           </div>
                           @foreach (\App\Models\User::where('memberId', $member1->id)->get() as $member2)
                              {{ $member2->name }}
                              @foreach (\App\Models\User::where('memberId', $member2->id)->get() as $member3)
                                 {{ $member3->name }}
                              @endforeach
                           @endforeach
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
