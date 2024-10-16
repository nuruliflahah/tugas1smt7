<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\GuruController;

Route::get(uri: '/', action: function ():Factory|View {
    return view('welcome');
});

Route::resource('/pelajaran', PelajaranController::class);
Route::resource('/guru', GuruController::class);
Route::resource('/absensi', GuruController::class);


