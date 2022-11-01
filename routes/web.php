<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', App\Http\Livewire\Home::class)->name('home');
Route::get('/products', App\Http\Livewire\ProductIndex::class)->name('products');
Route::get('/products/{id}', App\Http\Livewire\ProdukDetail::class)->name('products.detail');
Route::get('/keranjang', App\Http\Livewire\Keranjang::class)->name('keranjang');
