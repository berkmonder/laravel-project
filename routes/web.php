<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', 'ProfileController@index');

Route::get('/profile', 'ProfileController@index');
Route::post('/profile', 'ProfileController@store');

Route::get('/member', 'MembershipController@index');
Route::get('/consultant', 'ConsultantController@index');
