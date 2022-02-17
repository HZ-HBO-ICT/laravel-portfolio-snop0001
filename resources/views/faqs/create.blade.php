@extends('faqs.layout')

@section('head')
    <title> Submiting a New Question</title>
    <meta name="a page to submit a new question">
@endsection

@section('title')
    <h1>Submit your new question</h1>
@endsection

@section('content')
<form method="POST" action="/faq">
    @csrf
    <div>
        <label for="question">Question:</label><br>
        <div>
        <textarea name="question" id="question" rows="3" cols="50"> </textarea>
        </div>
    </div>

    <div>
        <label for="answer">Answer:</label><br>
        <div>
        <textarea name="answer" id="answer" rows="3" cols="50"> </textarea>
        </div>
    </div>

    <button type="submit">Submit</button>
</form>
@endsection
