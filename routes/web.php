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

// Route::get('/posts/{slug}', [PostsController::class, 'show']);

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/faq', [FaqController::class, 'index']);
Route::post('/faq', [FaqController::class, 'store']);
Route::get('/faq/create', [FaqController::class, 'create']);
Route::get('/faq/{question}', [FaqController::class,'show']);
Route::get('/blog', [BlogController::class, 'index']);
Route::post('/blog', [BlogController::class, 'store']);
Route::get('/blog/create', [BlogController::class, 'create']);
Route::get('/blog/{article}', [BlogController::class,'show']);

