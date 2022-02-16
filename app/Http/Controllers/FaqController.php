<?php
namespace App\http\Controllers;

use App\Models\Article;
use App\Models\Faq;

class FaqController
{
    /**
     * This function is made to show the view page
     */
    public function index()
    {
        // $questions = Faq::all();
        return view('faqs.index', ['questions'=>Faq::all()]);
    }

    /**
     * This function is made to render a single resource
     */
    public function show()
    {

    }

    /**
     * This function is made to show a view to create a new resource
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * This function is made to persist the new resource
     */
    public function store(Faq $question)
    {
        $question = Faq::latest()->first();
        if ($question->class_name === 'p-summary') {
            $nextClass = 'p-summary2';
        } elseif ($question->class_name === 'p-summary2') {
            $nextClass = 'p-summary3';
        } else {
            $nextClass = 'p-summary';
        }

        //creating a new article
        $question = new Faq();
        //setting its values to be according to the data from the form
        $question->question = request('question');
        $question->answer = request('answer');
        //extra defaults for inside use
        $question->class_name = $nextClass;
        //$question->link = '';
        //save it to the database
        $question->save();
        // redirecting to show a page
        return redirect('/faq');
    }

    /**
     * This function is made to show a view to edit an existing resource
     */
    public function edit(Faq $question)
    {

    }

    /**
     * This function is made to persist the edited resource
     */
    public function update(Faq $question)
    {

    }

    /**
     * This function is made to delete the resource
     */
    public function destroy(Faq $question)
    {

    }
}
