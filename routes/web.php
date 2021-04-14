<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@index');

Route::get('/profile', 'ProfileController@index');

Route::get('/members', 'MemberController@index');
Route::get('/members/{profileId}', 'MemberController@show');
