<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration');

Route::get('/password-reset-code', [AuthController::class, 'getPasswordResetCode'])->name('password-reset-code');
Route::group(['prefix' => 'change-password'], function () {
    Route::get('/', [AuthController::class, 'changePasswordShow'])->name('change-password-show');
    Route::post('/', [AuthController::class, 'changePassword'])->name('change-password');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/me', [AuthController::class, 'getAuthUser'])->name('user');
});
