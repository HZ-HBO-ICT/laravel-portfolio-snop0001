<?php
namespace App\http\Controllers;

use App\Models\Article;

class WelcomeController
{
    /**
     * This function is made to show the view page
     */
    public function index()
    {
            return view('welcome', ['articles'=>Article::latest()->take(3)->get()]);
    }
}
