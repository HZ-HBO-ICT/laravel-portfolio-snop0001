<?php
namespace App\http\Controllers;
use App\Models\Article;

class WelcomeController
{
    /**
     * This function is made to show the view page
     */
    public function show()
    {
            return view('welcome',['articles'=>Article::take(3)->get()]);
    }
}
