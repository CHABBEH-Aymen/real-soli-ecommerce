<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/dashboard', function(){return view('dashboard');})
->name('home')
->middleware('can:is-admin');

Route::get('/{vue_capture}', function () {
    if(Auth::check()){ 
       $data = ['user'=>Auth::user()];
       return view('welcome', compact('data'));
}else return view('welcome');})
->where('vue_capture', "[\/\w\.-]*")
->name('vue');


