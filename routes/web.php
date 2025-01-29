<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KcgAgriController;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('agris.home');
});

// Route::get('/', [KcgAgriController::class, 'home']);