<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;

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


Route::post("signup", [UserController::class, 'signup']);
Route::post("/signin", [UserController::class, 'login']);



Route::group(['middleware' => ['auth:sanctum']], function () {

   
    Route::post('/signout', [UserController::class, 'signout']);
});


// Route events

Route::get("/events", [EventController::class, 'index']);
Route::get("/events/{id}", [EventController::class, 'show']);

Route::post("/events", [EventController::class, 'store']);
Route::put("/events/{id}", [EventController::class, 'update']);
Route::delete("/events/{id}", [EventController::class, 'destroy']);

// Route Category
Route::get("/categories", [CategoryController::class, 'index']);
Route::get("/categories/{id}", [CategoryController::class, 'show']);
Route::get("/categories/search/{name}", [CategoryController::class, 'search']);

Route::post("/categories", [CategoryController::class, 'store']);
Route::put("/categories/{id}", [CategoryController::class, 'update']);
Route::delete("/categories/{id}", [CategoryController::class, 'destroy']);
