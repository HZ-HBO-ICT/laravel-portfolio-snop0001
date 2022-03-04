@extends('grades.layout')

@section('head')
    <title> Editing a Grade</title>
    <meta name="a page to edit a question">
@endsection

@section('title')
    <h1>Edit Grade</h1>
@endsection

@section('content')
    <form class="createForm" method="POST" action="{{route('grade.show', $grade)}}">
        @csrf
        @method('PUT')
        <h3 class="formH3"> Form for editing a grade</h3>

        <div class="qriteria">
            <label for="course_id">Course ID:</label><br>
            <div>
                <select
                    class="@error('course_id') is-invalid @enderror inputField"
                    name="course_id"
                    id="course_ide">
                    <option value={{$grade->course_id}}>{{$grade->course_id. '. ' }}</option>
                    @foreach($courses as $course)
                        <option value={{$course->id}}>{{$course->id .'. '. $course->name}}</option>
                    @endforeach
                </select>

        <div class="qriteria">
            <label for="test_name">Test Name:</label><br>
            <div>
        <textarea
            class="@error('test_name') is-invalid @enderror inputField"
            name="test_name"
            id="test_name"
            rows="5"
            cols="80">{{$grade->test_name}}</textarea>
                @error('EC')
                <p class="error-Message">{{$errors->first('test_name')}}</p>
                @enderror
            </div>
        </div>

        <div class="qriteria">
            <label for="best_grade">Grade:</label><br>
            <div>
        <textarea
            class="@error('best_grade') is-invalid @enderror inputField"
            name="best_grade"
            id="best_grade"
            rows="5"
            cols="80">{{$grade->best_grade}}</textarea>
                @error('EC')
                <p class="error-Message">{{$errors->first('best_grade')}}</p>
                @enderror
            </div>
        </div>


        <button class="buttonSubmit" type="submit">Submit</button>
    </form>

    <form method="POST" action="{{route('grade.show', $grade)}}">
        @csrf
        @method('DELETE')
        <button class="buttonSubmit" type="submit">Delete</button>
    </form>


@endsection
