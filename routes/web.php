<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
// routes/web.php

//produit
Route::get('/produits', [ProduitController::class, 'index'])->name('produits.index');
Route::get('/produits/create', [ProduitController::class, 'create'])->name('produits.create');
Route::post('/produits', [ProduitController::class, 'store'])->name('produits.store');
Route::get('/produits/{id}/edit', [ProduitController::class, 'edit'])->name('produits.edit');
Route::put('/produits/{id}', [ProduitController::class, 'update'])->name('produits.update');
Route::delete('/produits/{id}', [ProduitController::class, 'destroy'])->name('produits.destroy');

Route::get('/{vue_capture}', function () {
    $data = ['user'=>Auth::user()];
   if(Auth::check()) return view('welcome', compact('data'));
   else view('welcome');
})->where('vue_capture', "[\/\w\.-]*");


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
