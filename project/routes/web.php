<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\AutoController::class, 'create']);

Route::get('lists', [\App\Http\Controllers\ListController::class, 'index']);
Route::get('marks', [\App\Http\Controllers\MarkController::class, 'index']);
Route::get('models', [\App\Http\Controllers\ModelController::class, 'index']);

Route::get('auto', [\App\Http\Controllers\AutoController::class, 'create']);
Route::post('auto', [\App\Http\Controllers\AutoController::class, 'store']);
