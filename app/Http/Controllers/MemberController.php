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

  public function show($memberId)
  {
    $member = \App\Models\User::find($memberId);

    return view('members.show', compact('member'));
  }
}
