<?php

use App\Http\Controllers\GenderController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome'); //welcome is the file in the views folder
});

Route::controller(GenderController::class)->group(function() {
    Route::get('/genders', 'index');
    Route::get('/gender/create', 'create');
    Route::get('/gender/view/{id}', 'show');
    Route::get('/gender/edit/{id}', 'edit');
    Route::get('/gender/delete/{id}', 'delete');

    Route::post('/gender/store', 'store');
    Route::put('/gender/update/{gender}', 'update');
    Route::delete('/gender/destroy/{gender}', 'destroy');
});


Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create',[UserController::class,'create']);
// Route::get('/store', [UserController::class,'store']);
Route::post('/user/store',[UserController::class, 'store']);

