<?php

use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
Route::prefix('v1')->group(function () {
    // Check provided credentials for matching logins
    Route::post('/login', [UsersController::class, 'login'])->name('api.v1.users.login');
    Route::post('/register', [UsersController::class, 'register'])->name('api.v1.users.register');
    Route::post('/logout', [UsersController::class, 'logout'])->name('api.v1.users.logout');
    Route::prefix('event')->middleware('auth:api')->group(function () {
        Route::post('/', [EventController::class, 'create'])->name('api.v1.event.create');

    });
});
