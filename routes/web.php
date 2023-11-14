<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\KelasController;

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


Route::controller(DepanController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/siswa', 'siswa')->name('siswa');
    Route::get('/guru', 'guru')->name('guru');
    Route::get('/mapel', 'mapel')->name('mapel');
});

Route::controller(SiswaController::class)->group(function () {
    Route::get('/dataSiswa', 'index')->name('dataSiswa');
    Route::get('/tambahDataSiswa', 'create')->name('tambahDataSiswa');
});

Route::controller(MapelController::class)->group(function () {
    Route::get('/dataMapel', 'index')->name('dataMapel');
    Route::get('/tambahDataMapel', 'create')->name('tambahDataMapel');
});

Route::controller(GuruController::class)->group(function () {
    Route::get('/dataGuru', 'index')->name('dataGuru');
    Route::get('/tambahDataGuru', 'create')->name('tambahDataGuru');
});

Route::controller(JurusanController::class)->group(function () {
    Route::get('/dataJurusan', 'index')->name('dataJurusan');
});

Route::controller(KelasController::class)->group(function () {
    Route::get('/dataKelas', 'index')->name('dataKelas');
    Route::get('/dataKelasCreate', 'create')->name('dataKelasCreate');
    Route::post('/prosesDataKelasCreate', 'store')->name('prosesDataKelasCreate');
    Route::put('/dataKelasEdit/{id}', 'update')->name('dataKelasEdit');
    Route::delete('/hapusDataKelas/{id}', 'destroy')->name('hapusDataKelas');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/proses', 'proses')->name('proses');
});