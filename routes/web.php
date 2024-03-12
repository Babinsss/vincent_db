<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Route for showing the form to create a new user
Route::get('/users', function () {
    return view('user.index');
});
// Route for showing the form to create a new user
Route::get('/create', function () {
    return view('user.create');
});

// Route for storing user data and redirecting to store.blade.php
Route::post('/user/store', [UserController::class, 'store'])->name('user.store')->middleware('auth');

/// Route for displaying stored user information
Route::get('/store', function () {
    $user = App\Models\User::first(); // Fetch the first user from the database, you can adjust this according to your needs
    return view('user.store', ['user' => $user]); // Pass the $user variable to the view
});

//Genders Routes
Route::get('/genders', function () {
    return view('gender.index');
});
