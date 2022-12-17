<?php

use App\Http\Controllers\ChartsController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', [MahasiswaController::class, 'dashboard']);

Route::get('/siswa', [MahasiswaController::class, 'index'])->name('index');
Route::post('/create', [MahasiswaController::class, 'create'])->name('create');
Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [MahasiswaController::class, 'update'])->name('update');
Route::get('/delete/{id}', [MahasiswaController::class, 'delete'])->name('delete');
Route::get('/nilai', [MahasiswaController::class, 'nilai'])->name('nilai');
Route::get('/createNilai/{id}', [MahasiswaController::class, 'createNilai'])->name('createNilai');
Route::post('/hitungNilai/{id}', [MahasiswaController::class, 'hitungNilai'])->name('hitungNilai');