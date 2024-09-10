<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\Test;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
  
Route::view('/discovers','discovers');
Route::post('/discovers',[QuizController::class,'kkkk']);

Route::get('/bb',[Test::class,'doing']);
Route::get('/bold',[QuizController::class,'accessbold']);
Route::post('/bold',[QuizController::class,'savebold']);


Route::get('/test',[QuizController::class,'accesstest']);
Route::post('/test',[QuizController::class,'savetest']);

Route::get('/testview',[QuizController::class,'gettestanswer']);
Route::get('/testresult',[QuizController::class,'gettestresult']);

Route::view('/testfeedback','testfeedback');
Route::post('/testfeedback',[QuizController::class,'testfeedback']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isadmin'])->group(function(){
    Route::view('/quizcreation','quizcreation');
    Route::post('/quizcreation',[QuizController::class,'savequiz']);
    Route::get('/quiz',[QuizController::class,'getquiz']);
    Route::get('/deletequiz/{id}',[QuizController::class,'deletequiz']);
    Route::get('/updatequiz/{id}',[QuizController::class,'updatequiz']);
    Route::post('/updatequiz',[QuizController::class,'editquiz']);

    });

    
