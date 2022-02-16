
@extends('layout')

@section('head')
    <title> Shirel's Blog:</title>
    <meta name="description" content="Blog page for Shirel's Snopik website for school">
@endsection

@section('header-title')
    <h1>Welcome to The Blog!</h1>
@endsection


@section('content')
    @foreach($articles as $article)
        <article>
            <h2 class="blog"> {{$article->title}} - {{Str::Limit($article->created_at, 10)}} </h2>
            <p class={{$article->class}}>{{$article->excerpt}} <a class="read-me" href="/blog/{{$article->link}}"> Read
                    more.</a></p>
        </article>
    @endforeach
    <br><br>
@endsection
