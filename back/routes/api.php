<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\JoninsController;
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

// Categories
Route::get('/categories', [CategoriesController::class, 'index']);
Route::post('/categories', [CategoriesController::class, 'store']);

Route::get('/categories/{id}', [CategoriesController::class, 'show']);
Route::put('/categories/{id}', [CategoriesController::class, 'update']);
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy']);
Route::get('/categories/search/{name}', [CategoriesController::class, 'search']);

// Events
Route::get('/events', [EventsController::class, 'index']);
Route::post('/events', [EventsController::class, 'store']);

Route::get('/events/{id}', [EventsController::class, 'show']);
Route::put('/events/{id}', [EventsController::class, 'update']);
Route::delete('/events/{id}', [EventsController::class, 'destroy']);
Route::get('/events/search/{title}', [EventsController::class, 'search']);

// Users
Route::get('/users', [UsersController::class, 'users']);
Route::post('/signup', [UsersController::class, 'signup']);
Route::post("/signin", [UsersController::class, 'signin']);

Route::get('/users/{id}', [UsersController::class, 'show']);
Route::put('/users/{id}', [UsersController::class, 'update']);
Route::delete('/users/{id}', [UsersController::class, 'destroy']);
Route::get('/users/search/{name}', [UsersController::class, 'search']);

// Join
// Events
Route::get('/joined', [JoninsController::class, 'index']);
Route::post('/joined', [JoninsController::class, 'store']);


Route::delete('/joined/{id}', [JoninsController::class, 'destroy']);
