<?php

use App\Http\Controllers\RaceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(RaceController::class)
    ->prefix('/race')
    ->group(function() {
        Route::get('/result', 'result');
        Route::get('/best-lap', 'bestLap');
        Route::get('/best-lap-in-race', 'bestLapInRace');
        Route::get('/diff-winner', 'diffWinner');
});