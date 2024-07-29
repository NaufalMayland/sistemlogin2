<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruMapelController;
use App\Http\Controllers\GuruKelasController;

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

Route::get('/', [LoginController::class, 'LoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::get('/logout ', [LoginController::class, "logout"]);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});

Route::middleware(['auth', 'guru_role'])->group(function () {
    Route::get('/guru', [GuruController::class, 'index']);
    Route::get('/guru/tkompetensi', [GuruController::class, 'tkompetensi'])->name('guru.tkompetensi');

});

Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/siswa', [SiswaController::class, "index"]);
});
