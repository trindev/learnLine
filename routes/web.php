<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
Route::controller(AdminController::class)->group(function () {

    Route::get('admin', 'index')->name('admin');

});
Route::get('/', function () {
    return view('welcome');
});

Route::controller(LoginController::class)->group(function () {

    //Line Login
    Route::get('auth/line','redirectToLine')->name('loginLine');
    Route::get('auth/line/callback','handleLineCallback');

});

Auth::routes();

Route::controller(HomeController::class)->group(function () {

    Route::get('home', 'index')->name('home');
    Route::get('myData', 'myData')->name('myData');
});
