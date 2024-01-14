<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('guzik/310578/people',[PeopleController::class, 'index']);
Route::get('guzik/310578/people/{people}',[PeopleController::class, 'show']);
Route::post('guzik/310578/people',[PeopleController::class, 'store']);
Route::put('guzik/310578/people/{people}',[PeopleController::class, 'update']);
Route::delete('guzik/310578/people/{people}',[PeopleController::class, 'destroy']);