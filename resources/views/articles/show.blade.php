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


        </main>
    @endif
    <button onclick="window.location.href='/blog/{{$article->link}}/edit'">
        Edit This post
    </button>
@endsection

@section('button')
    <li><a href="#" onclick="window.location.href='/blog'">Return to Blog Page</a></li>
@endsection
