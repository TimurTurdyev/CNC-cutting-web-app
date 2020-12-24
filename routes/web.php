<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
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
    Route::get('/', [ServiceController::class, 'index'])->middleware('DontEndSlashMiddleware');
    Route::get('/{services:slug}/', [ServiceController::class, 'category'])->middleware('DontEndSlashMiddleware');
    Route::get('/{services:slug}/{details:slug}', [ServiceController::class, 'detail'])->middleware('DontEndSlashMiddleware');
});

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', [BlogController::class, 'index'])->middleware('DontEndSlashMiddleware');
    Route::get('/{categories:slug}/', [BlogController::class, 'category'])->middleware('DontEndSlashMiddleware');
    Route::get('/{categories:slug}/{posts:slug}', [BlogController::class, 'post'])->middleware('DontEndSlashMiddleware');
});

Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [ContactController::class, 'index'])->middleware('DontEndSlashMiddleware');
    Route::post('send', [ContactController::class, 'sendContact']);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
