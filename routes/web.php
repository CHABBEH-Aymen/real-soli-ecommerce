<?php

use Illuminate\Support\Facades\Route;

Route::get('/{vue_capture}', function () {
    return view('welcome');
})->where('vue_capture', "[\/\w\.-]*");

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
