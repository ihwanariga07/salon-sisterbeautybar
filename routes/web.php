<?php

use Illuminate\Support\Facades\Route;

// Route::fallback (function () {
//     return view('notfound');
// });



Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

