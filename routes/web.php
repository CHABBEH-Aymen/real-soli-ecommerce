<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/dashboard', function(){return view('dashboard');})
->name('home')
->middleware('can:is-admin');
// routes/web.php

//produit
Route::get('/produits', [ProduitController::class, 'index'])->name('produits.index');
Route::get('/produits/create', [ProduitController::class, 'create'])->name('produits.create');
Route::post('/produits', [ProduitController::class, 'store'])->name('produits.store');
Route::get('/produits/{id}/edit', [ProduitController::class, 'edit'])->name('produits.edit');
Route::put('/produits/{id}', [ProduitController::class, 'update'])->name('produits.update');
Route::delete('/produits/{id}', [ProduitController::class, 'destroy'])->name('produits.destroy');

Route::get('/{vue_capture}', function () {
    if(Auth::check()){ 
       $data = ['user'=>Auth::user()];
       return view('welcome', compact('data'));
}else return view('welcome');})
->where('vue_capture', "[\/\w\.-]*")
->name('vue');


