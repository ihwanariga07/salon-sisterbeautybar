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


use App\Http\Controllers\AboutController;
Route::get('/about', [AboutController::class, 'index'])->name('about');


use App\Http\Controllers\ServiceController;
Route::get('/services', [ServiceController::class, 'index'])->name('services');


use App\Http\Controllers\KontakController;
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');


use App\Http\Controllers\ContactController;
Route::get('/kontak-kami', [KontakController::class, 'index'])->name('contact.index');

