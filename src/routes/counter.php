<?php

use CountingUtil\Controllers\CountingController;
use Illuminate\Support\Facades\Route;

Route::get('/counter',[CountingController::class, 'counterStatus'])->name('counter.index');

Route::post('/counter/increase', [CountingController::class, 'increase'])->name('counter.increase');
Route::post('/counter/decrease', [CountingController::class, 'decrease'])->name('counter.decrease');