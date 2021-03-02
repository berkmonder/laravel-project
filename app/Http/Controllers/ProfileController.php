<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function store()
    {
        \App\Models\Profile::create(request()->validate([
            'name' => 'required | min:5'
        ])); //fillable alanları validate edip, create ediyor.

        return redirect()->back();
    }
}
