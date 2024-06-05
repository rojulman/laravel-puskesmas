<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

use App\Http\Controllers\PasienController;
Route::get('/pasien/show',[PasienController::class, 'show'])->name('pasien.show');
Route::get('/pasien/create',[PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien/store',[PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/{id}/view',[PasienController::class, 'view'])->name('pasien.view');
Route::get('/pasien/{id}/edit',[PasienController::class, 'edit'])->name('pasien.edit');
Route::delete('/pasien/{id}',[PasienController::class, 'destroy'])->name('pasien.destroy');
Route::get('/pasien/kelurahan',[PasienController::class, 'kelurahan'])->name('pasien.kelurahan');

use App\Http\Controllers\KelurahanController;
Route::get('/kelurahan/show',[KelurahanController::class, 'show'])->name('kelurahan.show');
Route::get('/kelurahan/{id}/view',[KelurahanController::class, 'view'])->name('kelurahan.view');


use App\Http\Controllers\ParamedikController;
Route::get('/paramedik/show',[ParamedikController::class, 'show'])->name('paramedik.show');

use App\Http\Controllers\AdminController;
Route::get('/admin', [AdminController::class, 'index']);


