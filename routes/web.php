<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{GradeController, CourseController,
    ProfileController,WelcomeController,FaqController,ArticleController};


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

//Welcome
Route::get('/', [WelcomeController::class, 'index']);

//Profile
Route::get('/profile', [ProfileController::class, 'index']);

//faqs
Route::resource('/faq', FaqController::class);

//articles
Route::resource('/article', ArticleController::class);

//grades
Route::resource('/grade', GradeController::class);

//courses
Route::resource('/course', CourseController::class);

//Test
Route::get('/test', function(){
    return view('test');
});

//500 error temp
Route::get('servererror', function () {
    abort(500);
})->name('servererror');

