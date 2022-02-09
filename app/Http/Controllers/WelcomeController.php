<?php
namespace App\http\Controllers;

class WelcomeController
{
    /**
     * This function is made to show the view page
     */
    public function show()
    {
            return view('welcome');
    }
}
