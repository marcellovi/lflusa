<?php

use Illuminate\Support\Facades\Route;

//Route::prefix('dashboard')->middleware(['auth'])->group(function () {
//Route::get('/', fn () => 'Welcome to the Dashboard');
//Route::get('/stats', fn () => 'Here are your dashboard stats');
//});


Route::get('/test', function () {
    return "test";
});
