@extends('articles.layout')

@section('head')
    <title> Editing Post</title>
    <meta name="description"
          content="Creating a new post">
@endsection

@section('title')
    <div>
        <h1> Edit current Post: </h1>
    </div>
@endsection

@section('content')
    <h2>Edit your post here:</h2>
    <form method="POST" action="/blog/{{$article->link}}">
        @csrf
        @method('PUT')
        <div class="field">
            <label for="title"> Title </label>
            <div class="control">
                <input type="text" name="title" id="title" value="{{$article->title}}">
            </div>
        </div>

        <div class="field">
            <label for="innerTitle"> Inner Title </label>
            <div class="control">
                <input type="text" name="innerTitle" id="innerTitle" value="{{$article->innerTitle}}">
            </div>
        </div>

        <div class="field">
            <label for="excerpt"> Excerpt </label>
            <div class="control">
                <textarea name="excerpt" id="excerpt" rows="2" cols="50">{{$article->excerpt}} </textarea>
            </div>
        </div>

        <div class="field">
            <label for="body"> Body </label>
            <div class="control">
                <textarea name="body" id="body" rows="3" cols="50"> {{$article->body}}</textarea>
            </div>
        </div>

        <div class="field">
            <label for="link"> Write what will show in URI </label>
            <div class="control">
                <input type="text" name="link" id="link" value="{{$article->link}}">
            </div>
        </div>

        <button type="submit">Submit</button>

        <form method="POST" action="/blog/{{$article->link}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </form>

@endsection

@section('button')
    <li><a href="#" onclick="window.location.href='/blog/{{$article->link}}'">Return to Article</a></li>
@endsection
