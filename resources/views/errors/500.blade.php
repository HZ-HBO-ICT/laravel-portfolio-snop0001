@extends('layouts.error')

@section('head')
    <title> 500 error </title>
    <meta name="description" content="server error">
@endsection

@section('header-title')
    <h1></h1>
@endsection

@section('content')
    <div class="grid-error-page">
        <div class="Main-error-page">
            <img class="error500" src="/img/500.png" alt="500">
            <div>
            <span> Oops this is embarrassing...seems we are having a small problem </span>
             <p> Excuse us this is our fault, promise we will work on fixing this!</p>
                <p> please return at a later time :)</p>
            </div>
        </div>

        <img id="image" class="errorImg" src="/img/sunset.png" alt="beach image">
    </div>




@endsection
