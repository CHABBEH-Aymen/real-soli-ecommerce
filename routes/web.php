<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/{vue_capture}', function () {
    $data = ['user'=>Auth::user()];
   if(Auth::check()) return view('welcome', compact('data'));
   else view('welcome');
})->where('vue_capture', "[\/\w\.-]*");


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
