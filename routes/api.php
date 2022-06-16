<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\KategoriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('image')->group(function(){
    Route::post('post', [ImageController::class, 'store_data'])->name('gambar.store');
    Route::post('pack', [ImageController::class, 'store_data_pack']);
    Route::get('image', [ImageController::class, 'get_data']);
    Route::post('data', [ImageController::class, 'get_image']);
    Route::post('show-data', [ImageController::class, 'show_images']);
    Route::post('filter', [ImageController::class, 'list_svg']);
    Route::post('delete-data', [ImageController::class, 'delete_image'])->name('gambar.delete');
    Route::delete('delete-all',[ImageController::class, 'delete_all']);
    Route::get('download', [ImageController::class, 'download_line']);
    Route::get('download1', [ImageController::class, 'download_linecolor']);
    Route::get('download2', [ImageController::class, 'download_solid']);
    Route::get('download3', [ImageController::class, 'download_solidcolor']);
    Route::get('download4', [ImageController::class, 'download_multi']);
});


Route::prefix('kategori')->group(function(){
    Route::post('data', [KategoriController::class, 'get_kategori']);
    Route::post('create-data', [KategoriController::class, 'create_kategori'])->name('kategori.store');
    Route::post('show-data', [KategoriController::class, 'show_kategori']);
    Route::post('delete-data', [KategoriController::class, 'delete_kategori'])->name('kategori.delete');
    Route::delete('delete-all',[KategoriController::class, 'delete_all']);
});


// Route::post('/login', [AuthController::class, 'login'])->name('login');

