<?php
namespace App\http\Controllers;

use App\Models\Faq;

class FaqController
{
    /**
     * This function is made to show the view page
     */
    public function show()
    {
        // $questions = Faq::all();
        return view('faq', ['questions'=>Faq::all()]);
    }
}
