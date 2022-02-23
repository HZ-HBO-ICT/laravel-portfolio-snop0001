@extends('grades.layout')

@section('head')
    <title> Submiting a New Grade</title>
    <meta name="a page to submit a new question">
@endsection

@section('title')
    <h1>Submit your new Grade</h1>
@endsection

@section('content')
    <form class="createForm" method="POST" action="{{route('grade.index')}}">
        <h3 class="formH3"> Form for new Grade</h3>
        @csrf
        <div class="qriteria">
            <label for="category">Category:</label><br>
            <div>
        <textarea
            class="@error('category') is-invalid @enderror inputField"
            name="category"
            id="category"
            rows="3"
            cols="80">{{old('category')}}</textarea>
                @error('category')
                <p class="error-Message">{{$errors->first('category')}}</p>
                @enderror
            </div>
        </div>

        <div class="qriteria">
            <label for="course_name">Course name:</label><br>
            <div>
        <textarea
            class="@error('course_name') is-invalid @enderror inputField"
            name="course_name"
            id="course_name"
            rows="5"
            cols="80">{{old('course_name')}}</textarea>
                @error('course_name')
                <p class="error-Message">{{$errors->first('course_name')}}</p>
                @enderror
            </div>
        </div>

        <div class="qriteria">
            <label for="EC">EC:</label><br>
            <div>
        <textarea
            class="@error('EC') is-invalid @enderror inputField"
            name="EC"
            id="EC"
            rows="5"
            cols="80">{{old('EC')}}</textarea>
                @error('EC')
                <p class="error-Message">{{$errors->first('EC')}}</p>
                @enderror
            </div>
        </div>

        <div class="qriteria">
            <label for="test_name">Test Name:</label><br>
            <div>
        <textarea
            class="@error('test_name') is-invalid @enderror inputField"
            name="test_name"
            id="test_name"
            rows="5"
            cols="80">{{old('test_name')}}</textarea>
                @error('EC')
                <p class="error-Message">{{$errors->first('test_name')}}</p>
                @enderror
            </div>
        </div>

        <button class="buttonSubmit" type="submit">Submit</button>
    </form>
@endsection
