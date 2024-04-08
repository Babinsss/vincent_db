<?php

use App\Http\Controllers\GenderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Routes for GenderController
Route::controller(GenderController::class)->group(function() {
    Route::get('/genders', 'index'); // List all genders
    Route::get('/gender/create', 'create'); // Show form to create a gender
    Route::get('/gender/view/{id}', 'show'); // View a specific gender
    Route::get('/gender/edit/{id}', 'edit'); // Show form to edit a gender
    Route::get('/gender/delete/{id}', 'delete'); // Show delete confirmation for a gender

    Route::post('/gender/store', 'store'); // Store a new gender
    Route::put('/gender/update/{gender}', 'update'); // Update a gender
    Route::delete('/gender/destroy/{gender}', 'destroy'); // Destroy a gender
});


// Routes for UserController
Route::get('/user', [UserController::class, 'index']); // Show all users
Route::get('/user/create',[UserController::class,'create']); // Show form to create a user
Route::get('/users/search', [UserController::class, 'search'])->name('users.search'); //Search user
Route::get('/user/create', [UserController::class, 'create'])->name('user.create'); // Named route for creating a user
Route::post('/user/store', [UserController::class, 'store'])->name('user.store'); // Store a new user
Route::get('/user/delete/{user_id}', [UserController::class, 'showDeleteConfirmation'])->name('confirmDelete'); // Show delete confirmation for a user
Route::post('/user/delete', [UserController::class, 'deleteUser'])->name('deleteUser'); // Delete a user
Route::get('/user/view/{user_id}', [UserController::class, 'view'])->name('viewUser'); // View a specific user
Route::get('/user/edit/{user_id}', [UserController::class, 'edit'])->name('editUser'); // Show form to edit a user
Route::put('/user/update/{user_id}', [UserController::class, 'update'])->name('updateUser'); // Update a user

// Routes for authentication
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
// Add this to your web routes
Route::get('/logout', function () {
    return view('login.logout'); // return the logout confirmation view
})->name('logout.get');

// Your existing POST route for logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Additional routes
Route::get('/home', [UserController::class, 'home'])->name('home'); // Show home page
Route::get('/create', [UserController::class, 'create'])->name('create'); // Show create form for user
Route::get('/index', [UserController::class, 'index'])->name('index'); // Show all users

//Routes For In Order To Stay only in login page 
Route::middleware(['auth'])->group(function () {
    // User routes
    Route::get('/user', [UserController::class, 'index']); // Show all users
    Route::get('/user/create',[UserController::class,'create']); // Show form to create a user
    Route::get('/users/search', [UserController::class, 'search'])->name('users.search'); //Search user
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store'); // Store a new user
    Route::get('/user/delete/{user_id}', [UserController::class, 'showDeleteConfirmation'])->name('confirmDelete'); // Show delete confirmation for a user
    Route::post('/user/delete', [UserController::class, 'deleteUser'])->name('deleteUser'); // Delete a user
    Route::get('/user/view/{user_id}', [UserController::class, 'view'])->name('viewUser'); // View a specific user
    Route::get('/user/edit/{user_id}', [UserController::class, 'edit'])->name('editUser'); // Show form to edit a user
    Route::put('/user/update/{user_id}', [UserController::class, 'update'])->name('updateUser'); // Update a user
});

Route::middleware(['auth'])->group(function () {
    // Routes for GenderController
    Route::get('/genders', [GenderController::class, 'index']); // List all genders
    Route::get('/gender/create', [GenderController::class, 'create']); // Show form to create a gender
    Route::get('/gender/view/{id}', [GenderController::class, 'show']); // View a specific gender
    Route::get('/gender/edit/{id}', [GenderController::class, 'edit']); // Show form to edit a gender
    Route::get('/gender/delete/{id}', [GenderController::class, 'delete']); // Show delete confirmation for a gender

    Route::post('/gender/store', [GenderController::class, 'store']); // Store a new gender
    Route::put('/gender/update/{gender}', [GenderController::class, 'update']); // Update a gender
    Route::delete('/gender/destroy/{gender}', [GenderController::class, 'destroy']); // Destroy a gender
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [UserController::class, 'home'])->name('home'); // Show home page
});


