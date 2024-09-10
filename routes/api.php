<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

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
    Route::get('/quizapi',[QuizController::class,'getquizapi']);
    Route::post('/quizcreationapi',[QuizController::class,'savequizapi']);
    Route::delete('/deletequizapi/{id}',[QuizController::class,'deletequizapi']);
    Route::put('/editquizapi',[QuizController::class,'editquizapi']);



    Route::get('/testviewapi',[QuizController::class,'gettestanswerapi']);