<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacteristicCategoriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/characteristic', [CharacteristicCategoriesController::class, 'index'])
    ->name('characteristic');
