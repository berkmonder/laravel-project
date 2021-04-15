<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    $members = \App\Models\User::where('memberId', auth()->user()->id)->get();

    return view('members.index', compact('members'));
  }

  public function show($profileId)
  {
    // dd(\App\Models\User::where('id', $profileId)->first()->memberId);
    $members = \App\Models\User::where('id', $profileId)->where('memberId', auth()->user()->id)->first();

    if (!$members){
      return redirect('/');
    }
    return view('members.show', compact('members'));
  }
}
