<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\GuruController;

Route::get(uri: '/', action: function ():Factory|View {
    return view('welcome');
});

Route::resource('/pelajaran', PelajaranController::class);
Route::post('pelajaran/create',[PelajaranController::class,'create']);
Route::get('pelajaran/index',[PelajaranController::class,'index']);
Route::get('pelajaran/show/{id}',[PelajaranController::class,'show']);
Route::delete('pelajaran/delete/{id}',[PelajaranController::class,'delete']);
Route::put('pelajaran/update/{id}',[PelajaranController::class,'update']);

Route::resource('/guru', GuruController::class);
Route::post('guru/create',[GuruController::class,'create']);
Route::get('guru/index',[GuruController::class,'index']);
Route::get('guru/show/{id}',[GuruController::class,'show']);
Route::delete('guru/delete/{id}',[GuruController::class,'delete']);
Route::put('guru/update/{id}',[GuruController::class,'update']);

Route::resource('/absensi', GuruController::class);
Route::post('absensi/create',[AbsensiController::class,'create']);
Route::get('absensi/index',[AbsensiController::class,'index']);
Route::get('absensi/show/{id}',[AbsensiController::class,'show']);
Route::delete('absensi/delete/{id}',[AbsensiController::class,'delete']);
Route::put('absensi/update/{id}',[AbsensiController::class,'update']);

