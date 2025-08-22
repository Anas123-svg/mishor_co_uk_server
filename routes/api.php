<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FireSafetyController;
use App\Http\Controllers\HealthSafetyController;
use App\Http\Controllers\SurveyController;

use App\Http\Controllers\ContactController;

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

// fire-safety

Route::get('/fire-safety', [FireSafetyController::class, 'index']);

Route::get('/fire-safety/{id}', [FireSafetyController::class, 'show']);

Route::post('/fire-safety', [FireSafetyController::class, 'store']);

Route::put('/fire-safety/{id}', [FireSafetyController::class, 'update']);

Route::delete('/fire-safety/{id}', [FireSafetyController::class, 'destroy']);

// health safety

Route::get('/health-safety', [HealthSafetyController::class, 'index']);

Route::get('/health-safety/{id}', [HealthSafetyController::class, 'show']);

Route::post('/health-safety', [HealthSafetyController::class, 'store']);

Route::put('/health-safety/{id}', [HealthSafetyController::class, 'update']);

Route::delete('/health-safety/{id}', [HealthSafetyController::class, 'destroy']);

// surveys

Route::get('/surveys', [SurveyController::class, 'index']);

Route::get('/surveys/{id}', [SurveyController::class, 'show']);

Route::post('/surveys', [SurveyController::class, 'store']);

Route::put('/surveys/{id}', [SurveyController::class, 'update']);

Route::delete('/surveys/{id}', [SurveyController::class, 'destroy']);

//contact

Route::post('/contact-us', [ContactController::class, 'store']);
