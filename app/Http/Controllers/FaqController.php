<?php

namespace App\http\Controllers;

use App\Models\Article;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController
{
    /**
     * This function is made to show the view page
     */
    public function index()
    {
        // $questions = Faq::all();
        return view('faqs.index', ['faqs' => Faq::all()]);
    }

    /**
     * This function is made to render a single resource
     */
    public function show()
    {
        //empty
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
    public function store(Request $request)
    {
        $validatedAttributes = $this->validateFaq($request);

        $question1 = Faq::latest()->first();
        if ($question1->class_name === 'p-summary') {
            $nextClass = 'p-summary2';
        } elseif ($question1->class_name === 'p-summary2') {
            $nextClass = 'p-summary3';
        } else {
            $nextClass = 'p-summary';
        }
        $validatedAttributes['class_name']= $nextClass;

        Faq::create($validatedAttributes);

        // redirecting to show a page
        return redirect('/faq');
    }

    /**
     * This function is made to show a view to edit an existing resource
     */
    public function edit(Faq $faq)
    {
        return view('faqs.edit', ['faq' => $faq]);
    }

    /**
     * This function is made to persist the edited resource
     */
    public function update(Faq $faq, Request $request)
    {
        $faq->update($this->validateFaq($request));

        //redirecting back to the faq main page
        return redirect('/faq');
    }

    /**
     * This function is made to delete the resource
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect('/faq');
    }

    /**
     * @return array
     */
    public function validateFaq(Request $request): array
    {
        $validatedAttributes = $request->validate([
            'question' => ['required','min:10'],
            'answer'=>['required','min:10'],
        ]);
        return $validatedAttributes;
    }
}
