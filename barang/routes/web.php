<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\WriterController;

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
        })->name('welcome');

Route::get('/user-login', [LoginController::class,'index'])->name('login');
Route::post('/send-data-login', [LoginController::class,'takeData'])->name('send.login');
Route::get('/user-logout', [LoginController::class,'logout'])->name('user.logout');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/landing-page',[PagesController::class,'index'])->name('index');
    Route::get('/control-panel/index',[AdminController::class,'index'])->name('cp.index');
    Route::get('/control-panel/crud/index',[BookController::class,'index'])->name('crud_index');
    Route::get('/control-panel/crud/add',[BookController::class,'add'])->name('crud-add');
    Route::post('/conrol-panel/crud/store',[BookController::class,'create'])->name('crud-create');
    Route::get('/control-panel/crud/{id}/edit',[BookController::class,'edit']);
    Route::post('/control-panel/crud/{id}/update',[BookController::class,'update']);
    Route::get('/control-panel/crud/{id}/delete',[BookController::class,'delete']);
    Route::get('/control-panel/writer/index',[WriterController::class,'index'])->name('writer.index');
});

