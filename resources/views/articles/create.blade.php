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
    <form class="createForm" method="POST" action="{{route('article.index')}}">
        @csrf
        <h3 class="formH3"> Submit Your Post here:</h3>
        <div class="qriteria">
            <label for="title"> Title </label>
            <div class="control">
                <textarea
                    class="@error('title') is-invalid @enderror inputField"
                    name="title" id="title"
                    rows="2"
                    cols="50">{{old('title')}}</textarea>
                @error('title')
                <p class="error-Message">{{$errors->first('title')}}</p>
                @enderror
            </div>
        </div>

        <div class="qriteria">
            <label for="innerTitle"> Inner Title </label>
            <div class="control">
                <textarea
                    class="@error('innerTitle') is-invalid @enderror inputField"
                    name="innerTitle"
                    id="innerTitle"
                    rows="2"
                    cols="50">{{old('innerTitle')}}</textarea>
                @error('innerTitle')
                <p class="error-Message">{{$errors->first('innerTitle')}}</p>
                @enderror
            </div>
        </div>

        <div class="qriteria">
            <label for="excerpt"> Excerpt </label>
            <div class="control">
                <textarea class="@error('excerpt') is-invalid @enderror inputField" name="excerpt" id="excerpt" rows="3"
                          cols="80">{{old('excerpt')}}</textarea>
                @error('excerpt')
                <p class="error-Message">{{$errors->first('excerpt')}}</p>
                @enderror
            </div>
        </div>

        <div class="qriteria">
            <label for="body"> Body </label>
            <div class="control">
                <textarea class="@error('body') is-invalid @enderror inputField" name="body" id="body" rows="5"
                          cols="80">{{old('body')}}</textarea>
                @error('body')
                <p class="error-Message">{{$errors->first('body')}}</p>
                @enderror
            </div>
        </div>

        <div class="qriteria">
            <label for="link"> Write what will show in URI </label>
            <div class="control">
                <textarea class="@error('link') is-invalid @enderror inputField" name="link" id="link" rows="2"
                          cols="50"
                          placeholder="for example: My-Post-1">{{old('link')}}</textarea>
                @error('link')
                <p class="error-Message">{{$errors->first('link')}}</p>
                @enderror
            </div>
        </div>

        <button class="buttonSubmit" type="submit">Submit</button>

    </form>
@endsection


@section('button')
    <li><a href="#" onclick=window.location.href="{{route('article.index')}}">Return to Blog</a></li>
@endsection
