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
    $members1 = \App\Models\User::where('memberId', auth()->user()->id)->get();
    // $members2 = \App\Models\User::where('memberId', $members1->id)->get();
    // $members3 = \App\Models\User::where('memberId', $members2->id)->get();

    return view('members.index', compact('members1'));
  }

  public function show($memberId)
  {
    // $members = \App\Models\User::where('id', $memberId)->where('memberId', auth()->user()->id)->first();
    $members = \App\Models\User::where('memberId', auth()->user()->id)->findOrFail($memberId); // Alternative

    return view('members.show', compact('members'));
  }
}
