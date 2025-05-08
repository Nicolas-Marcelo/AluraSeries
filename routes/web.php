<?php

use App\Http\Controllers\SeriesControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [SeriesControllers::class, 'listarSeries']);