<?php

use App\Http\Controllers\StatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});

Route::post('register', [StatusController::class, 'register']);
Route::get('index', [StatusController::class, 'index']);
Route::post('store', [StatusController::class, 'store']);
Route::put('update/{status}', [StatusController::class, 'update']);
Route::delete('delete/{status}', [StatusController::class, 'destroy']);