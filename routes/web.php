<?php

use App\Http\Controllers\AlatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UkmController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', [UkmController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('ukm.main');
});
Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']] , function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi');
    Route::get('/divisi/create', [DivisiController::class, 'create'])->name('create-divisi');
    Route::post('/divisi/simpan', [DivisiController::class, 'store'])->name('simpan-divisi');
    Route::get('/divisi/edit/{id}', [DivisiController::class, 'edit'])->name('edit-divisi');
    Route::post('/divisi/update/{id}', [DivisiController::class, 'update'])->name('update-divisi');
    Route::get('/divisi/delete/{id}', [DivisiController::class, 'destroy'])->name('delete-divisi');

    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');
    Route::get('/jadwal/create', [JadwalController::class, 'create'])->name('create-jadwal');
    Route::post('/jadwal/simpan', [JadwalController::class, 'store'])->name('simpan-jadwal');
    Route::get('/jadwal/edit/{id}', [JadwalController::class, 'edit'])->name('edit-jadwal');
    Route::post('/jadwal/update/{id}', [JadwalController::class, 'update'])->name('update-jadwal');
    Route::get('/jadwal/delete/{id}', [JadwalController::class, 'destroy'])->name('delete-jadwal');


    Route::get('/Pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
    Route::get('/Pendaftaran/detail/{id}', [PendaftaranController::class, 'detail'])->name('detail-pendaftaran');


    Route::get('/alat', [AlatController::class, 'index'])->name('alat');




    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('update-profile');
});




