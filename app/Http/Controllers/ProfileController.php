<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      return view('profile.index');
  }

  public function show(\App\Models\User $profile)
  {
    // $profiles = \App\Models\User::where('id', $profileId)->first(); // Alternative 1
    // $profiles = \App\Models\User::findOrFail($profileId); // Alternative 2

    return view('profile.show', compact('profile'));
  }

  public function edit($profile)
  {
    $profile = \App\Models\User::where('id', auth()->user()->id)->where('id', $profile)->first();

    return view('profile.edit', compact('profile'));
  }

  public function update(\App\Models\User $profile)
  {
    $data = request()->validate([
      'name' => 'required',
      'image' => '',
    ]);

    if(request()->hasFile('image')){
      $filename = request()->image->getClientOriginalName();
      request()->image->storeAs('images',$filename,'public');
      Auth()->user()->update(['image'=>$filename]);
    }

    $profile->update($data);

    return redirect('/profile');
  }
}
