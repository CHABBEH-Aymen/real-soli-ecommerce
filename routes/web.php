<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/{vue_capture}', function () {
    if(Auth::check()){ 
       $data = ['user'=>Auth::user()];
       return view('welcome', compact('data'));
}
   else view('welcome');
return view('welcome');
})->where('vue_capture', "[\/\w\.-]*");


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
