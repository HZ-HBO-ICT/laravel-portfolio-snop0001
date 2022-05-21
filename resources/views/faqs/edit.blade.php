@extends('faqs.layout')

@section('head')
    <title> Editing a Question</title>
    <meta name="a page to edit a question">
@endsection

@section('title')
    <h1>Edit the question here</h1>
@endsection

@section('content')
    <form class="createForm" method="POST" action="{{route('faq.show', $faq)}}">
        @csrf
        @method('PUT')
        <h3 class="formH3"> Form for Editing a question</h3>
        <div class="qriteria">
            <label for="question">Question:</label><br>
            <div>
                <textarea
                    class="@error('question') is-invalid @enderror inputField"
                    name="question"
                    id="question"
                    rows="3"
                    cols="80">{{$faq->question}} </textarea>
                @error('question')
                <p class="error-Message">{{$errors->first('question')}}</p>
                @enderror
            </div>
        </div>

        <div class="qriteria" >
            <label for="answer">Answer:</label><br>
            <div>
                <textarea
                    class="@error('answer') is-invalid @enderror inputField"
                    name="answer"
                    id="answer"
                    rows="10"
                    cols="80">{{$faq->answer}}</textarea>
                @error('answer')
                <p class="error-Message">{{$errors->first('answer')}}</p>
                @enderror
            </div>
        </div>

        <button class="buttonSubmit" type="submit">Submit</button>
    </form>

    <form method="POST" action="{{route('faq.show', $faq)}}">
        @csrf
        @method('DELETE')
        <button class="buttonSubmit" type="submit">Delete</button>
    </form>

@endsection
