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
            <label for="course_id">Course ID:</label><br>
            <div>
        <select
            class="@error('course_id') is-invalid @enderror inputField"
            name="course_id"
            id="course_ide">
            <option value="">Choose a course</option>
            @foreach($courses as $course)
                <option value={{$course->id}}>{{$course->id .'. '. $course->name}}</option>
            @endforeach
        </select>
                @error('course_id')
                <p class="error-Message">{{$errors->first('course_id')}}</p>
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
