<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;

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

Route::get('/user-login', [LoginController::class,'index'])->name('user.login');
Route::post('/send-data-login', [LoginController::class,'takeData'])->name('send.login');
Route::get('/user-logout', [LoginController::class,'logout'])->name('user.logout');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/landing-page',[PagesController::class,'index'])->name('index');
    Route::get('/control-panel/index',[AdminController::class,'index'])->name('cp.index');

});



