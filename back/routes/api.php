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

// Route users================================================================
// public
Route::get("/users", [UserController::class, 'users']);
Route::get("/users/{id}", [UserController::class, 'show']);
// prave
Route::post("/signup", [UserController::class, 'signup']);
Route::post("/signin", [UserController::class, 'login']);
//==============================================================================

// Public route events==========================================================
Route::get("/events", [EventController::class, 'index']);
Route::get("/events/{id}", [EventController::class, 'show']);
Route::get("/events/search/{title}", [EventController::class, 'search']);
//==============================================================================

// Route Category
    // Public route Category
    Route::get("/categories", [CategoryController::class, 'index']);
    Route::get("/categories/{id}", [CategoryController::class, 'show']);
    Route::get("/categories/search/{name}", [CategoryController::class, 'search']);
//================================================================================

    // Route events
    // Praivate route events
    Route::post("/events", [EventController::class, 'store']);
    Route::put("/events/{id}", [EventController::class, 'update']);
    Route::delete("/events/{id}", [EventController::class, 'destroy']);

    // Praivate route Category
    Route::post("/categories", [CategoryController::class, 'store']);
    Route::put("/categories/{id}", [CategoryController::class, 'update']);
    Route::delete("/categories/{id}", [CategoryController::class, 'destroy']);

    // Route::post('/signout', [UserController::class, 'signout']);

