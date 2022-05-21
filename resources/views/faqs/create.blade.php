@extends('faqs.layout')

@section('head')
    <title> Submiting a New Question</title>
    <meta name="a page to submit a new question">
@endsection

@section('title')
    <h1>Submit your new question</h1>
@endsection

@section('content')
<form class="createForm" method="POST" action="{{route('faq.index')}}">
    <h3 class="formH3"> Form for new Question</h3>
    @csrf
    <div class="qriteria">
        <label for="question">Question:</label><br>
        <div>
        <textarea
            class="@error('question') is-invalid @enderror inputField"
            name="question"
            id="question"
            rows="3"
            cols="80">{{old('question')}}</textarea>
            @error('question')
            <p class="error-Message">{{$errors->first('question')}}</p>
            @enderror
        </div>
    </div>

    <div class="qriteria">
        <label for="answer">Answer:</label><br>
        <div>
        <textarea
            class="@error('answer') is-invalid @enderror inputField"
            name="answer"
            id="answer"
            rows="5"
            cols="80">{{old('answer')}}</textarea>
            @error('answer')
            <p class="error-Message">{{$errors->first('answer')}}</p>
            @enderror
        </div>
    </div>

    <button class="buttonSubmit" type="submit">Submit</button>
</form>
@endsection
