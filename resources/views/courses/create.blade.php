@extends('courses.layout')

@section('head')
    <title> Submiting a New Course</title>
    <meta name="a page to submit a new course">
@endsection

@section('title')
    <h1>Submit your new Course</h1>
@endsection

@section('content')
    <form class="createForm" method="POST" action="{{route('course.index')}}">
        <h3 class="formH3"> Form for new Course</h3>
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
            <label for="name">Course name:</label><br>
            <div>
        <textarea
            class="@error('name') is-invalid @enderror inputField"
            name="name"
            id="name"
            rows="5"
            cols="80">{{old('name')}}</textarea>
                @error('name')
                <p class="error-Message">{{$errors->first('name')}}</p>
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

        <button class="buttonSubmit" type="submit">Submit</button>
    </form>

@endsection
