<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('/profile', 'ProfileController@index');
Route::post('/profile', 'ProfileController@store');

Route::get('/member', 'MembershipController@index');
Route::get('/consultant', 'ConsultantController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
