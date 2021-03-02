<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        $members = \App\Models\Profile::all();

        return view('membership.index', compact('members'));
    }
}
