<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\User;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/home','HomeController@upload')->name('home.upload');
// Route::get('/home', 'HomeController@index');

Route::get('/profile', 'ProfileController@index');
Route::get('/profile/{profile}', 'ProfileController@show');
Route::get('/profile/edit/{profile}', 'ProfileController@edit');
Route::patch('/profile/{profile}', 'ProfileController@update');

Route::get('/members', 'MemberController@index');
Route::get('/members/{memberId}', 'MemberController@show');