<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KcgAgriController;

Route::get('/', [KcgAgriController::class, 'home']);