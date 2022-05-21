@extends('layouts.error')

@section('head')
    <title> 404 error </title>
    <meta name="description" content="not found page">
@endsection

@section('header-title')
<h1></h1>
@endsection

@section('content')
    <div class="grid-error-page">
        <div class="Main-error-page">
            <section class="error-container">
                <span class="four"><span class="screen-reader-text">4</span></span>
                <span class="zero"><span class="screen-reader-text">0</span></span>
                <span class="four"><span class="screen-reader-text">4</span></span>
            </section>
            <span> Oops seems like the page you are searching for does not exist</span>
            <p> Take a small break in this island or go back to exploring</p>
        </div>

    <img id="image" class="errorImg" src="/img/beach.png" alt="beach image">
    </div>




@endsection
