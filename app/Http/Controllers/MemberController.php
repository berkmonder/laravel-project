<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
  public function index()
  {
    $members = \App\Models\User::where('memberId', auth()->user()->id)->get();

    return view('members.index', compact('members'));
  }

  public function show($profileId)
  {
    // dd(\App\Models\User::where('id', $profileId)->first()->memberId);
    $members = \App\Models\User::where('id', $profileId)->where('memberId', auth()->user()->id)->first();

    return view('members.show', compact('members'));
  }
}
