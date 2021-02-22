<?php

use Illuminate\Support\Facades\Route;
use Laravel\Calc\Controllers\CalcControllers;

Route::get('/my_calc',[CalcControllers::class, 'index']);

Route::post('/calculate',[CalcControllers::class,'calc'])->name('calc');