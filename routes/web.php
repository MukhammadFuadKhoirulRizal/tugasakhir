<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SantriController;

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
    return view('welcome');
});

Route::get('/santri',[SantriController::class,'index']);
Route::get('/santri/create',[SantriController::class,'create']);
Route::post('/santri/store',[SantriController::class,'store']);
Route::get('/santri/{id}/edit',[SantriController::class,'edit']);
Route::put('/santri/{id}',[SantriController::class,'Update']);
Route::delete('/santri/{id}',[SantriController::class,'destroy']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::resource('/santri', \App\Http\Controllers\SantriController::class);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

