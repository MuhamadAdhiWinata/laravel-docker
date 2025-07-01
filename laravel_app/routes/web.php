<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalloController;

// Route::get('/', function () {
//     echo "halo";
// });

Route::get('/',[HalloController::class, 'index']);
