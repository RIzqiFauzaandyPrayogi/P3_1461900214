<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\JenisBukuController;
use App\Http\Controllers\RakBukuController;

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

Route::get('/', function () {return view('welcome');});
Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('/jenisbuku', [JenisBukuController::class, 'index'])->name('jenisbuku');
Route::get('/rakbuku', [RakBukuController::class, 'index'])->name('rakbuku');