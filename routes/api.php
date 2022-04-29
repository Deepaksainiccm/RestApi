<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

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

Route::get('/students',[StudentController::class, 'index']);

Route::get('/students/{id}',[StudentController::class, 'show']);

Route::post('/students',[StudentController::class, 'store']);

Route::post('/register',[UserController::class, 'register']);

Route::post('/login',[UserController::class, 'login']);

Route::put('/students',[StudentController::class, 'update']);

Route::delete('/students',[StudentController::class, 'destroy']);

Route::get('/students/search/{city}',[StudentController::class, 'search']);

// Route::resource('students', StudentController::class);

// protected routes
Route:: middleware(['auth:sanctum'])->group(function()
    {
        // Route::get('/students',[StudentController::class, 'index']);

        Route::post('/logout',[UserController::class, 'logout']);
    });
    
