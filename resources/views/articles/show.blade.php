@extends('articles.layout')

@section('head')
    <title> {{$article ->title}}</title>
    <meta name="description"
          content={{$article ->excerpt}}>
@endsection

@section('title')
    <div>
        <h1> Post Page: </h1>
    </div>
@endsection

@section('main-Show')
    @if($article->link === 'ict-field-of-work')
        {!!$article ->body!!}
        <button id="button"class="buttonSubmit" onclick=window.location.href="{{route('article.edit', $article)}}">
            Edit This post
        </button>
    @else
        <main>
            <article class="blog-article">
                <h2 class="blog-Post"> {{$article->innerTitle}}</h2>
                <br>
                @if($article->ExistsInSeeder === 'yes')
                    {!!$article->body!!}
                @else
                    <p class="blog-post"> {{$article->body}}</p>
                @endif
            </article>

            <button id="button"class="buttonSubmit" onclick= window.location.href="{{route('article.edit', $article)}}">
                Edit This post
            </button>
        </main>
    @endif

@endsection

@section('button')
    <li><a href="#" onclick=window.location.href="{{route('article.index')}}">Return to Blog Page</a></li>
@endsection
