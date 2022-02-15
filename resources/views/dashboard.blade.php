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
    @foreach($grades as $grade)
        @if($grade->passed_at !== null)
            {{$totalEC += $grade->EC}}
        @endif
    @endforeach
    <div class="prog-bar">
        <label id="bar" for="credits"> Number of Credits Obtained: {{$totalEC}} EC</label>
        <progress id="credits" value={{$totalEC}} max="45" > </progress>
        <br>
        <label id="warning" for="credits" > You must have 45 EC by the end of the year! </label>
    </div>
    <br>

    <div id="tables">
        @foreach($grades as $grade)
            @if($previousCategory !== $grade->category)
                <table class="dashboard-table-quartile">
                    <thead>
                    <tr>
                        <td class="dashboard-header-table"> {{$previousCategory = $grade->category}}:</td>
                    </tr>

                    <tr>
                        <td>Course</td>
                        <td>EC</td>
                        <td>Exam</td>
                        <td >Grade</td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($grades as $grade)
                        @if($previousCategory === $grade->category)
                            <tr>
                            <td> {{$grade->course_name}}</td>
                            <td> {{$grade->EC}}</td>
                            <td>{{$grade->test_name}} </td>
                            <td class='{{$grade->grade_class}}'>{{$grade->best_grade}} </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                @endif
        @endforeach

    </div>
@endsection
