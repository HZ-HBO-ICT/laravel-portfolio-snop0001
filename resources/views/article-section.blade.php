@extends('post-layout')
@section('head')
    <title> Article Section Blog Post</title>
    <meta name="description"
          content="Article Section Blog Post Shirel Snopik">
@endsection

@section('content')
    <article class="blog-article">
        <h2 class="blog-post"> Nesting Article in Section or Vice Versa?</h2>
        <br>
        <p class="blog-post"> In my opinion the Section element should be inside the Article element. Article is meant
            to represent individual parts of text that don`t necessary have a connection between them in terms of structure of text, in contrast to
            Sections which are meant to define parts of the same text such as "Description","content","contact" etc. so they should appear in a certain order.
            therefore, in my opinion an Article will be built by a number of Sections to form a proper text.
        </p>
    </article>
@endsection

