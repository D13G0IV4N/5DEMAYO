<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncuestaController;

Route::post('/guardar-encuesta', [EncuestaController::class, 'guardar'])->name('guardar_encuesta');

Route::get('/', function () {
    return view('Festividad');
});
