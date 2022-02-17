<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{DashboardController,ProfileController,WelcomeController,FaqController,BlogController};

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

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

//faqs
//Route::get('/faq', [FaqController::class, 'index']);
//Route::post('/faq', [FaqController::class, 'store']);
//Route::get('/faq/create', [FaqController::class, 'create']);
//Route::get('/faq/{question}', [FaqController::class,'show']);
//Route::get('/faq/{question}/edit', [FaqController::class,'edit']);
//Route::put('/faq/{question}', [FaqController::class,'update']);
//Route::delete('/faq/{question}', [FaqController::class,'destroy']);

Route::resource('/faq', FaqController::class);

//Blog and articles
//Route::get('/blog', [BlogController::class, 'index']);
//Route::post('/blog', [BlogController::class, 'store']);
//Route::get('/blog/create', [BlogController::class, 'create']);
//Route::get('/blog/{article}', [BlogController::class,'show']);
//Route::get('/blog/{article}/edit', [BlogController::class,'edit']);
//Route::put('/blog/{article}', [BlogController::class,'update']);
//Route::delete('/blog/{article}', [BlogController::class,'destroy']);

Route::resource('/blog', BlogController::class);
