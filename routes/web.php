<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;


Route::view('/', 'home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    /* Rotas estarão disponiveis somante após autenticação - Produtos */
#GET
Route::controller(ProductController::class)->group(function (){
    Route::get('/products', 'index')->name('products.index'); 
    Route::get('/products/create','create')->name('products.create'); 
    Route::get('/products/edit/{product}','edit')->name('products.edit');
    Route::get('/products/{product}', 'show')->name('products.show'); 
    Route::post('/products/store','store')->name('products.store');
    Route::put('/products/edit/{product}','update')->name('products.update');
    Route::delete('/products/destroy/{product}', 'destroy')->name('products.destroy');
});

/* Rotas estarão disponiveis somante após autenticação - Tags */
#GET
Route::controller(TagController::class)->group(function (){
Route::get('/tags', 'index')->name('tags.index');
Route::get('/tags/create','create')->name('tags.create');
Route::get('/tags/edit/{tag}','edit')->name('tags.edit');
Route::get('/tags/{tag}', 'show')->name('tags.show');
Route::post('/tags/store','store')->name('tags.store');
Route::put('/tags/edit/{tag}','update')->name('tags.update');
Route::delete('/tags/destroy/{tag}', 'destroy')->name('tags.destroy');
});

require __DIR__.'/auth.php';

