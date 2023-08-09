<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::group(['prefix' => '{locale?}', 'middleware' => 'Locale', 'as' => 'locale.'], function() {
    
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/{slug?}', [ProductController::class, 'detail'])->name('detail');
});