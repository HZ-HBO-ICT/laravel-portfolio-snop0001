@extends('layout')

@section('head')
    <title> List of courses </title>
    <meta name="description" content="Courses">
@endsection

@section('header-title')
    <h1>Welcome to The Course layout:</h1>
@endsection

@section('content')
    <div id="tables">
        @foreach($courses as $course)
            @if($previousCategory !== $course->category)
                {!!$previousCategory = $course->category !!}
                <table class="dashboard-table-quartile">
                    <thead>
                    <tr>
                        <td class="dashboard-header-table"> {{$course->category}}:</td>
                    </tr>

                    <tr>
                        <td>Course</td>
                        <td>Course ID</td>
                        <td>EC</td>
                        <td></td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($courses as $course)
                        @if($previousCategory === $course->category)
                    <tr>
                        <td>{{$course->name}}</td>
                        <td>{{$course->id}}</td>
                        <td>{{$course->EC}}</td>
                        <td>  <button class="editButton" onclick=window.location.href="{{route('course.edit', $course)}}">
                                Edit Course
                            </button> </td>
                    </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            @endif
        @endforeach


        <button class="buttonSubmit" onclick=window.location.href="{{route('course.create')}}">
            Submit New Course
        </button>

    </div>
@endsection

