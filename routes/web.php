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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/halaman-data', [App\Http\Controllers\HalamanData::class, 'index'])->name('halaman data');
Route::get('/maps-user', [App\Http\Controllers\UserController::class, 'map'])->name('Map user');
Route::get('/maps-data', [App\Http\Controllers\UserController::class, 'data'])->name('Data user');
Route::post('/input-data', [App\Http\Controllers\HalamanData::class, 'store'])->name('data lokasi rumah sakit');
Route::get('/edit-data/{id}', [App\Http\Controllers\HalamanData::class, 'edit'])->name('edit data');
Route::post('/update-data/{id}', [App\Http\Controllers\HalamanData::class, 'update'])->name('update data');
Route::get('/delete-data/{id}', [App\Http\Controllers\HalamanData::class, 'destroy'])->name('delete data');
Route::get('/tambah-data', [App\Http\Controllers\HalamanData::class, 'create'])->name('tambah data');
Route::get('/detail-map/{id}', [App\Http\Controllers\HalamanData::class, 'show'])->name('detail map');
Route::get('/halaman-tematik', [App\Http\Controllers\TematikController::class, 'index'])->name('halaman tematik');
Route::get('/tambah-tematik', [App\Http\Controllers\TematikController::class, 'create'])->name('tambah tematik');
Route::post('/input-tematik', [App\Http\Controllers\TematikController::class, 'store'])->name('data tematik');
Route::get('/edi-tematik/{id}', [App\Http\Controllers\TematikController::class, 'edit'])->name('edit tematik');
Route::post('/update-tematik/{id}', [App\Http\Controllers\TematikController::class, 'update'])->name('update tematik');
Route::get('/delete-tematik/{id}', [App\Http\Controllers\TematikController::class, 'destroy'])->name('delete tematik');
Route::get('/maps', [App\Http\Controllers\MapController::class, 'index'])->name('maps');
Route::get('/halaman-data2', [App\Http\Controllers\HalamanData2::class, 'index'])->name('halaman data2');
Route::post('/input-data2', [App\Http\Controllers\HalamanData2::class, 'store'])->name('data rumah sakit');
Route::get('/edit-data2/{id}', [App\Http\Controllers\HalamanData2::class, 'edit'])->name('edit data2');
Route::post('/update-data2/{id}', [App\Http\Controllers\HalamanData2::class, 'update'])->name('update data2');
Route::get('/delete-data2/{id}', [App\Http\Controllers\HalamanData2::class, 'destroy'])->name('delete data2');
Route::get('/tambah-data2', [App\Http\Controllers\HalamanData2::class, 'create'])->name('tambah data2');
