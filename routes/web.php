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

Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found.');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
});

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/faq', [FaqController::class, 'show']);
Route::get('/blog', [BlogController::class, 'show']);

// blog posts view
Route::get('/blog/{blog}', function($blog) {
   $blogs = [
       'changes-after-pitch',
       'article-section',
       'first-feedback',
       'ict-field-of-work',
       'personal-swot-analysis',
       'programming-experience',
       'study-choice'

   ];

    if (array_search($blog, $blogs) === null) {
        abort(404, 'Sorry, that blog was not found.');
    }

    return view($blog);

});
