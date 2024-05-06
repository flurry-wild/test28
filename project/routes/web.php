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
Route::get('models', [\App\Http\Controllers\ListController::class, 'models']);

Route::get('autos', [\App\Http\Controllers\AutoController::class, 'index']);
Route::get('auto', [\App\Http\Controllers\AutoController::class, 'create']);
Route::get('auto/{auto}', [\App\Http\Controllers\AutoController::class, 'show']);
Route::post('auto', [\App\Http\Controllers\AutoController::class, 'store']);
Route::patch('auto/{auto}', [\App\Http\Controllers\AutoController::class, 'update']);
Route::delete('auto/{auto}', [\App\Http\Controllers\AutoController::class, 'delete']);
