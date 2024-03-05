<?php

use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return view('user.index');
});

// Route for storing user
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
