<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::group(['prefix' => 'service'], function () {
    Route::get('/', [ServicesController::class, 'index']);
    Route::get('/{services:slug}/', [ServicesController::class, 'category']);
    Route::get('/{services:slug}/{details:slug}', [ServicesController::class, 'detail']);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
