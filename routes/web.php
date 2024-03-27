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

Route::get('/genders', [GenderController::class, 'index']);
Route::get('/gender/create', [GenderController::class, 'create']);
Route::get('/gender/view/{id}', [GenderController::class, 'show']);
Route::post('/gender/edit/{id}', [GenderController::class, 'edit']);
Route::post('/gender/store', [GenderController::class, 'store']);
Route::post('/gender/update/{gender}', [GenderController::class, 'update']);
Route::delete('/genders/delete/{id}', [GenderController::class, 'delete'])->name('genders.delete');
// Route::destroy('/gender/destroy/{gender}',[GenderController::class,'destroy']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create',[UserController::class,'create']);
// Route::get('/store', [UserController::class,'store']);
Route::post('/user/store',[UserController::class, 'store']);

