@extends('courses.layout')

@section('head')
    <title> Editing a course</title>
    <meta name="a page to edit the course">
@endsection

@section('title')
    <h1>Edit the course</h1>
@endsection

@section('content')
    <form class="createForm" method="POST" action="{{route('course.show', $course)}}">
        @csrf
        @method('PUT')
        <h3 class="formH3"> Form for editing a course</h3>
    <div class="qriteria">
        <label for="category">Category:</label><br>
        <div>
        <textarea
            class="@error('category') is-invalid @enderror inputField"
            name="category"
            id="category"
            rows="3"
            cols="80">{{$course->category}}</textarea>
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
            cols="80">{{$course->name}}</textarea>
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
            cols="80">{{$course->EC}}</textarea>
            @error('EC')
            <p class="error-Message">{{$course->first('EC')}}</p>
            @enderror
        </div>
    </div>
        <button class="buttonSubmit" type="submit">Submit</button>
    </form>

    <form method="POST" action="{{route('course.show', $course)}}">
        @csrf
        @method('DELETE')
        <button class="buttonSubmit" type="submit">Delete</button>
    </form>

@endsection
