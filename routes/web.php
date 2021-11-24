<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\LoginController;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\LogOutController;
use \App\Http\Controllers\Admin\Users\UserController;


    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!aa
    |
    */

Route::get('/', function () {return view('welcome');});
// ADMIN AREA
Route::get('admin/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/login/store', [LoginController::class, 'store']);
Route::middleware(['auth'])->group(function() {
    Route::get('admin/logout', [LogOutController::class, 'logout']);
    Route::prefix('admin')->group(function(){
        Route::get('/', [MainController::class, 'index']);
        Route::get('main', [MainController::class, 'index'])->name('admin');
        Route::get('users/list', [UserController::class, 'listAll']);
    });

});
