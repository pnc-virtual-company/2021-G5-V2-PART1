<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route events

Route::get("/users", [UserController::class, 'users']);
Route::get("/users/{id}", [UserController::class, 'show']);


Route::post("/users/signup", [UserController::class, 'signup']);
Route::post("/users/login", [UserController::class, 'login']);



Route::group(['middleware' => ['auth:sanctum']], function () {

   
    Route::post('/logout', [UserController::class, 'logout']);
});


// Route events

Route::get("/events", [EventController::class, 'index']);
Route::get("/events/{id}", [EventController::class, 'show']);

Route::post("/events", [EventController::class, 'store']);
Route::put("/events/{id}", [EventController::class, 'update']);
Route::delete("/events/{id}", [EventController::class, 'destroy']);
