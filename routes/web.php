<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jenisobat', [App\Http\Controllers\jenisobatController::class, 'index']);
Route::get('/jenisobat/create', [App\Http\Controllers\jenisobatController::class, 'create']);
Route::post('/jenisobat', [App\Http\Controllers\jenisobatController::class, 'store']);
Route::get('/jenisobat/{id}/edit', [App\Http\Controllers\jenisobatController::class, 'edit']);
Route::patch('/jenisobat/{id}', [App\Http\Controllers\jenisobatController::class, 'update']);
Route::delete('/jenisobat/{id}', [App\Http\Controllers\jenisobatController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/obat', [App\Http\Controllers\obatController::class, 'index']);
Route::get('/obat/create', [App\Http\Controllers\obatController::class, 'create']);
Route::post('/obat', [App\Http\Controllers\obatController::class, 'store']);
Route::get('/obat/{id}/edit', [App\Http\Controllers\obatController::class, 'edit']);
Route::patch('/obat/{id}', [App\Http\Controllers\obatController::class, 'update']);
Route::delete('/obat/{id}', [App\Http\Controllers\obatController::class, 'destroy']);

Route::get('/pelanggan', [App\Http\Controllers\pelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\pelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\pelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\pelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'destroy']);

Route::get('/transaksi', [App\Http\Controllers\transaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\transaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\transaksiController::class, 'store']);
Route::get('/transaksi/{id}/edit', [App\Http\Controllers\transaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'destroy']);