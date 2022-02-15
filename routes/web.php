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

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/faq', [FaqController::class, 'show']);
Route::get('/blog', [BlogController::class, 'show']);
Route::get('/blog/{article}', [BlogController::class,'showPost']);
