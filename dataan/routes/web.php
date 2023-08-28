<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\CategoryController;

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

Route::get('/game-world', [PagesController::class,'index'])->name('home');
Route::get('/', [PagesController::class,'login'])->name('login');
Route::post('/login-process', [LoginController::class,'process']);
Route::get('/logout', [LoginController::class,'logout']);
Route::get('/profil', [PagesController::class,'profil'])->name('profil');
Route::get('/profil-edit', [ProfilController::class,'edit'])->name('profil-edit');
Route::patch('/profil-update', [ProfilController::class,'update'])->name('profil-update');
Route::get('/category', [PagesController::class,'category'])->name('category');
Route::get('/add-category', [CategoryController::class,'add'])->name('add-category');
Route::post('/add-category-process', [CategoryController::class, 'store']);


