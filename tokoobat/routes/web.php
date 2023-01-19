<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('getLogin', [AuthController::class, 'getLogin'])->name('getLogin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('user-register',[AuthController::class,'create'])->name('create.user');

Route::get('dashboard/menu', [DashboardController::class, 'index'])->name('dashboard.menu');
