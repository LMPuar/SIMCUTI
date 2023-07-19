<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DashboardPegawaiController;

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


Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegistrasiController::class, 'index'])->middleware('guest');
Route::post('/register', [RegistrasiController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/pegawai', DashboardPegawaiController::class)->middleware('auth');
Route::resource('/dashboard/cuti', CutiController::class)->middleware('auth');
Route::resource('/dashboard/admin', AdminController::class)->middleware('admin');