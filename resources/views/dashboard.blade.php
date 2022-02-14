@extends('layout')

@section('head')
    <title> Shirel's Dashboard </title>
    <meta name="description" content="Dashboard page for Shirel's Snopik website for school">
@endsection

@section('header-title')
    <h1>Welcome to The Dashboard!</h1>
@endsection

@section('content')
    <div class="prog-bar">
        <label id="bar" for="credits"> Number of Credits Obtained: 5 EC</label>
        <progress id="credits" value="5" max="45" > </progress>
        <br>
        <label id="warning" for="credits" > You must have 45 EC by the end of the year! </label>
    </div>
    <br>

    <div id="tables">
        <table class="dashboard-table-quartile">
            <thead>
            <tr>
                <td class="dashboard-header-table"> Quartile 1:</td>
            </tr>

            <tr>
                <td>Course</td>
                <td>EC</td>
                <td>Exam</td>
                <td >Grade</td>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td> Programming and Career Orientation</td>
                <td> 2.5</td>
                <td>Assessment </td>
                <td class="not-graded" > </td>
            </tr>

            <tr>
                <td >Computer Science Basics</td>
                <td >5</td>
                <td>Written Exam</td>
                <td class="passed" >10</td>
            </tr>

            <tr>
                <td>Programming Basics</td>
                <td> 5</td>
                <td>Case Study</td>
                <td class="failed">5</td>
            </tr>
            </tbody>
        </table>

        <table class="dashboard-table-quartile">
            <thead>
            <tr>
                <td class="dashboard-header-table"> Quartile 2:</td>
            </tr>

            <tr>
                <td>Course</td>
                <td>EC</td>
                <td>Exam</td>
                <td>Grade</td>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td rowspan="2">Object Oriented Programming</td>
                <td rowspan="2" >10</td>
                <td>Case Study</td>
                <td class="not-graded"> </td>
            </tr>

            <tr>
                <td>Project </td>
                <td class="not-graded"> </td>

            </tr>
            </tbody>
        </table>

        <table class="dashboard-table-quartile">
            <thead>
            <tr>
                <td class="dashboard-header-table"> Quartile 3:</td>
            </tr>

            <tr>
                <td>Course</td>
                <td>EC</td>
                <td>Exam</td>
                <td>Grade</td>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>Framework Development 1</td>
                <td>5</td>
                <td>Case Study</td>
                <td class="not-graded"> </td>
            </tr>

            <tr>
                <td rowspan="3">Framework Project 1</td>
                <td rowspan="3">7.5</td>
                <td> Project </td>
                <td class="not-graded"> </td>

            </tr>

            <tr>
                <td> Assessment</td>
                <td class="not-graded"> </td>
            </tr>

            <tr>
                <td>Report</td>
                <td class="not-graded">  </td>
            </tr>

            </tbody>
        </table>

        <table class="dashboard-table-quartile">
            <thead>
            <tr>
                <td class="dashboard-header-table"> Quartile 4:</td>
            </tr>

            <tr>
                <td>Course</td>
                <td>EC</td>
                <td>Exam</td>
                <td >Grade</td>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td rowspan="3">Framework Project 2</td>
                <td rowspan="3">10</td>
                <td>Portfolio</td>
                <td class="not-graded"> </td>
            </tr>

            <tr>
                <td> Project</td>
                <td class="not-graded"> </td>
            </tr>

            <tr>
                <td>Assessment</td>
                <td class="not-graded">  </td>
            </tr>
            </tbody>
        </table>


        <table class="dashboard-table-quartile">
            <thead>
            <tr>
                <td class="dashboard-header-table"> Additional EC:</td>
            </tr>

            <tr>
                <td>Course</td>
                <td>EC</td>
                <td>Exam</td>
                <td>Grade</td>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>Personal Professional Development</td>
                <td> 12.5</td>
                <td>Portfolio</td>
                <td class="not-graded">  </td>
            </tr>

            <tr>
                <td>Personality 1</td>
                <td> 1.25</td>
                <td>Portfolio</td>
                <td class="not-graded">  </td>
            </tr>

            <tr>
                <td>Personality 2</td>
                <td> 1.25</td>
                <td>Portfolio</td>
                <td class="not-graded">  </td>
            </tr>
            </tbody>
        </table>

    </div>
@endsection
