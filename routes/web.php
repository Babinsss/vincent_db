<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/users', function () {
    return view('user.index');
});
