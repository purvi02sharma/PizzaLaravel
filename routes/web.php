<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AuthController::class,'login'])->middleware('alreadyLoggedIn');

Route::get("/register",[AuthController::class,'register'])->middleware('alreadyLoggedIn');

Route::post("/register-user",[AuthController::class,'registerUser'])->name("registered");

Route::post('/login-user',[AuthController::class,'loginUser'])->name('login-user');

Route::get('/menu',[AuthController::class,'menu'])->middleware('isLoggedIn');

Route::get('/logout',[AuthController::class,'logout']);

Route::post('/send-email',[AuthController::class,'sendEmail'])->name('send-message');