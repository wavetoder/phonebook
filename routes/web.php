<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstansiController;

Route::resource('instansi', InstansiController::class);


// Route::get('/', function () {
//     return view('welcome');
// });