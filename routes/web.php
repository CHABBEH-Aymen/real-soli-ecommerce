<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::middleware('api')->group(function(){
    Route::apiResource('produits',ProduitController::class);
});
Route::get('/{vue_capture}', function () {
    $data = ['user'=>Auth::user()];
   if(Auth::check()) return view('welcome', compact('data'));
   else view('welcome');
})->where('vue_capture', "[\/\w\.-]*");


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
