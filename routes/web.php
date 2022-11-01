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

Route::get('/', [App\Http\Livewire\Home::class, 'render'])->name('home');
Route::get('/products', [App\Http\Livewire\ProductIndex::class, 'render'])->name('products');
Route::get('/products/{id}', [App\Http\Livewire\ProductDetail::class, 'render'])->name('products.detail');
Route::get('/products/search', [App\Http\Livewire\ProductIndex::class, 'render'])->name('search');
