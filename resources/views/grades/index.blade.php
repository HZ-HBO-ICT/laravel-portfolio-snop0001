@extends('layout')

@section('head')
    <title> Shirel's Dashboard </title>
    <meta name="description" content="Dashboard page for Shirel's Snopik website for school">
@endsection

@section('header-title')
    <h1>Welcome to The Dashboard!</h1>
@endsection

@section('content')

    <div id="tables">
        @foreach($grades as $grade)
            @if($previousCategory !== $grade->category)
                @php $previousCategory = $grade->category @endphp
                <table class="dashboard-table-quartile">
                    <thead>
                    <tr>
                        <td class="dashboard-header-table"> {{$grade->category}}:</td>
                    </tr>

                    <tr>
                        <td>Course</td>
                        <td>EC</td>
                        <td>Exam</td>
                        <td >Grade</td>
                        <td></td>
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
                                <td>  <button class="editButton" onclick=window.location.href="{{route('grade.edit', $grade)}}">
                                        Edit Question
                                    </button> </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            @endif
        @endforeach

            <button class="buttonSubmit" onclick=window.location.href="{{route('grade.create')}}">
                Submit New Grade
            </button>

    </div>
@endsection

