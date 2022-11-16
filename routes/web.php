<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\gajiController;
use App\Http\Controllers\laporanController;

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
Route::get('/home',[indexController::class, 'index']);
Route::get('/jabatan',[indexController::class, 'jabatan']);
Route::get('/gaji',[indexController::class, 'gaji']);
Route::get('/karyawan',[indexController::class, 'karyawan']);
Route::get('/laporan',[indexController::class, 'laporan']);
Route::get('/', function () {
    return view('layout/main');

});
