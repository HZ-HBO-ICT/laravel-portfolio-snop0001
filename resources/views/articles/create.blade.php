@extends('articles.layout')

@section('head')
    <title> New Post</title>
    <meta name="description"
          content="Creating a new post">
@endsection

@section('title')
    <div>
        <h1> Creating New Post Page: </h1>
    </div>
@endsection

@section('content')
    <h2>Submit Your Post here:</h2>
    <form method="POST" action="/blog">
        @csrf
       <div class="field">
          <label for="title"> Title </label>
           <div class="control">
               <input type="text" name="title" id="title">
           </div>
       </div>

        <div class="field">
            <label for="excerpt"> Excerpt </label>
            <div class="control">
                <textarea name="excerpt" id="excerpt" rows="2" cols="50"> </textarea>
            </div>
        </div>

        <div class="field">
            <label for="body"> Body </label>
            <div class="control">
                <textarea name="body" id="body" rows="3" cols="50"> </textarea>
            </div>
        </div>

        <div class="field">
            <label for="link"> Write what will show in URI </label>
            <div class="control">
                <input type="text" name="link" id="link" value="for example: My-Post-1">
            </div>
        </div>

        <button type="submit">Submit</button>

    </form>
@endsection
