<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
Route::get('/register', [LoginController::class, 'Register'])->name('register');
Route::get('/login', [LoginController::class, 'Login'])->name('login');
Route::post('/register-loading', [LoginController::class, 'registload'])->name('register.loading');
Route::post('/login-loading', [LoginController::class, 'loginload'])->name('login.loading');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


