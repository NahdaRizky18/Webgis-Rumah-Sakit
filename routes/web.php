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

Route::get('/', [App\Http\Controllers\GuessController::class, 'index'])->name('welcome');
Route::post('/saran', [App\Http\Controllers\GuessController::class, 'store'])->name('post saran');
Auth::routes();
Route::get('/ruangan', [App\Http\Controllers\RuanganController::class, 'index'])->name('ruangan');
Route::get('/ruangan/tambah', [App\Http\Controllers\RuanganController::class, 'create'])->name('tambah ruangan');
Route::post('/ruangan/store', [App\Http\Controllers\RuanganController::class, 'store'])->name('store ruangan');
Route::get('/ruangan/edit/{id}', [App\Http\Controllers\RuanganController::class, 'edit'])->name('edit ruangan');
Route::post('/ruangan/update/{id}', [App\Http\Controllers\RuanganController::class, 'update'])->name('update ruangan');
Route::get('/ruangan/delete/{id}', [App\Http\Controllers\RuanganController::class, 'destroy'])->name('delete ruangan');

Route::get('/jadwal', [App\Http\Controllers\JadwalController::class, 'index'])->name('jadwal');
Route::get('/jadwal/tambah', [App\Http\Controllers\JadwalController::class, 'create'])->name('tambah jadwal');
Route::post('/jadwal/store', [App\Http\Controllers\JadwalController::class, 'store'])->name('store jadwal');
Route::get('/jadwal/edit/{id}', [App\Http\Controllers\JadwalController::class, 'edit'])->name('edit jadwal');
Route::post('/jadwal/update/{id}', [App\Http\Controllers\JadwalController::class, 'update'])->name('update jadwal');
Route::get('/jadwal/delete/{id}', [App\Http\Controllers\JadwalController::class, 'destroy'])->name('delete jadwal');

Route::get('/rumah-sakit', [App\Http\Controllers\RumahSakitController::class, 'index'])->name('rumah sakit');
Route::get('/rumah-sakit/tambah', [App\Http\Controllers\RumahSakitController::class, 'create'])->name('tambah rumahsakit');
Route::post('/rumah-sakit/store', [App\Http\Controllers\RumahSakitController::class, 'store'])->name('store rumahsakit');
Route::get('/rumah-sakit/edit/{id}', [App\Http\Controllers\RumahSakitController::class, 'edit'])->name('edit rumahsakit');
Route::post('/rumah-sakit/update/{id}', [App\Http\Controllers\RumahSakitController::class, 'update'])->name('update rumahsakit');
Route::get('/rumah-sakit/delete/{id}', [App\Http\Controllers\RumahSakitController::class, 'destroy'])->name('delete rumahsakit');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/halaman-data', [App\Http\Controllers\HalamanData::class, 'index'])->name('halaman data');
Route::get('/puskesmas', [App\Http\Controllers\PuskesmasController::class, 'index'])->name('puskesmas');
Route::get('/puskesmas-get/{id}', [App\Http\Controllers\PuskesmasController::class, 'show'])->name('detail puskesmas');
Route::get('/puskesmas-edit/{id}', [App\Http\Controllers\PuskesmasController::class, 'edit'])->name('edit puskesmas');
Route::get('/puskesmas-tambah', [App\Http\Controllers\PuskesmasController::class, 'create'])->name('tambah puskesmas');
Route::get('/puskesmas-delete/{id}', [App\Http\Controllers\PuskesmasController::class, 'destroy'])->name('delete puskesmas');
Route::post('/puskesmas-update/{id}', [App\Http\Controllers\PuskesmasController::class, 'update'])->name('update puskesmas');
Route::post('/puskesmas-store', [App\Http\Controllers\PuskesmasController::class, 'store'])->name('data puskesmas');
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
