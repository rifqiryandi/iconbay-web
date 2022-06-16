<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\KategoriController;
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

Route::get('/', [ImageController::class, 'to_frontend']);

Route::get('/light', [ImageController::class, 'to_frontend'])->name('line');
Route::get('/broken', [ImageController::class, 'to_frontend1'])->name('line-color');
Route::get('/bold', [ImageController::class, 'to_frontend2'])->name('solid');
Route::get('/bulk', [ImageController::class, 'to_frontend3'])->name('solid-color');
Route::get('/twotones', [ImageController::class, 'to_frontend4'])->name('multi');

Route::middleware('auth')->group(function(){
    Route::get('/admin', function() {
        return view('admin');
    });

    Route::get('/kategori', function() {
        return view('kategori');
    });

    Route::get('/kategori-detail/{id}', [KategoriController::class, 'detail_kategori']);

    Route::get('/gambar', [ImageController::class, 'to_image']);
});

Route::get('/auth', function(){
    return view('login');
});
Route::post('/signin', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::post('/login', [AuthController::class, 'login'])->name('login');
