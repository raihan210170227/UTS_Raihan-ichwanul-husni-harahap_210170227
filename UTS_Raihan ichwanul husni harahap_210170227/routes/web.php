<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
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

//Route::get('/', function () {
//   return view('welcome');
//});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin'], function () {
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/forms', [HomeController::class, 'index'])->name('index');
Route::get('/create', [HomeController::class, 'create'])->name('create');
Route::post('/store', [HomeController::class, 'store'])->name('matakuliah.store');

Route::get('/edit/{data}', [HomeController::class, 'edit'])->name('matakuliah.edit');
Route::put('/update/{data}', [HomeController::class, 'update'])->name('matakuliah.update');
Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('matakuliah.delete');
//});
