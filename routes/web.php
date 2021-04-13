<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@index');

Route::get('/profile', 'ProfileController@index');

Route::get('/members', 'MemberController@index');
Route::get('/members/{memberId}', 'MemberController@show');
