<?php

use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HalamanUtamaController::class, 'index']);
Route::get('shop', [HalamanUtamaController::class, 'shop']);
Route::get('contact', [HalamanUtamaController::class, 'contact']);
Route::get('cart', [HalamanUtamaController::class, 'cart']);
Route::get('profile', [HalamanUtamaController::class, 'profile']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('produks', App\Http\Controllers\produkController::class);
