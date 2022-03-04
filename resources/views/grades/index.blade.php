@extends('layout')

@section('head')
    <title> Shirel's Dashboard </title>
    <meta name="description" content="Dashboard page for Shirel's Snopik website for school">
@endsection

@section('header-title')
    <h1>Welcome to The Dashboard!</h1>
@endsection

@section('content')
    <br>
    <div class="prog-bar">
        <label id="bar" for="credits"> Number of Credits Obtained: {{$totalEC}} EC</label>
        <progress id="credits" value={{$totalEC}} max="45"></progress>
        <br>
        <label id="warning" for="credits"> You must have 45 EC by the end of the year! </label>
    </div>
    <br>

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
                        <td>EC</td>
                        <td>Exam</td>
                        <td>Grade</td>
                        <td></td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($courses as $course)
                        @if($previousCategory === $course->category)
                            <tr>
                                <td rowspan={{$gradesInCourse[$course->id]}}> {{$course->name}}</td>
                                <td rowspan={{$gradesInCourse[$course->id]}}> {{$course->EC}}</td>

                                @if($gradesInCourse[$course->id] === 0)
                                    <td colspan="3">
                                        <button class="editButton"
                                                onclick=window.location.href="{{route('grade.create', $grade)}}">
                                            Add Grade
                                        </button>
                                    </td>
                                @endif
                                @foreach($grades as $grade)
                                    @if($grade->course_id === $course->id)
                                        <td>{{$grade->test_name}} </td>
                                        <td class='{{$grade->grade_class}}'>{{$grade->best_grade}} </td>
                                        <td>
                                            <button class="editButton"
                                                    onclick=window.location.href="{{route('grade.edit', $grade)}}">
                                                Edit Grade
                                            </button>
                                        </td>
                            </tr>
                        @endif
                    @endforeach
                    @endif
                    @endforeach
                    </tbody>
                </table>
            @endif
        @endforeach


        <button class="buttonSubmit" onclick=window.location.href="{{route('grade.create')}}">
            Submit New Grade
        </button>

        <button class="buttonSubmit" onclick=window.location.href="{{route('course.index')}}">
           List of courses
        </button>

    </div>
@endsection

