@extends('faqs.layout')

@section('head')
    <title> Editing a Question</title>
    <meta name="a page to edit a question">
@endsection

@section('title')
    <h1>Edit the question here</h1>
@endsection

@section('content')
    <form method="POST" action="/faq/{{$question->id}}">
        @csrf
        @method('PUT')
        <div>
            <label for="question">Question:</label><br>
            <div>
                <textarea name="question" id="question" rows="3" cols="50">{{$question->question}} </textarea>
            </div>
        </div>

        <div>
            <label for="answer">Answer:</label><br>
            <div>
                <textarea name="answer" id="answer" rows="3" cols="50">{{$question->answer}} </textarea>
            </div>
        </div>

        <button type="submit">Submit</button>

        <form method="POST" action="/faq/{{$question->id}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>


    </form>
@endsection
