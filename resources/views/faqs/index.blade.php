@extends('layout')

@section('head')
    <title> Frequently Asked Questions</title>
    <meta name="FAQ page for Shirel's Snopik website for school">
@endsection

@section('header-title')
    <h1>Frequently Asked Questions:</h1>
@endsection

@section('content')
    <div class="grid-faq">

        <div class="apple-pic">
            <img id="apple-pic" alt="an apple" title="an apple" src="/img/apple.png">
        </div>


        <div class="pineapple-pic">
            <img id="pineapple-pic" alt="a pineapple" title="a pineapple" src="/img/pineapple.png">
        </div>

        <div class="orange-pic">
            <img id="orange-pic" alt="an orange" title="an orange" src="/img/orange.png">
        </div>

        <div class="pear-pic">
            <img id="pear-pic" alt="a pear" title="a pear" src="/img/pear.png">
        </div>

        <div class="strawberry-pic">
            <img id="strawberry-pic" alt="a strawberry" title="a strawberry" src="/img/strawberry.png">
        </div>

        <div class="peach-pic">
            <img id="peach-pic" alt="a peach" title="a peach" src="/img/peach.png">
        </div>


        <div id="all-q">
            @foreach($faqs as $faq)
            <details>
                <summary>
                    {{$faq->question}}
                </summary>
                <div class={{$faq->class_name}}>
                    <p>
                        {!! $faq->answer !!}
                        <button class="editButton" onclick="window.location.href='/faq/{{$faq->id}}/edit'">
                            Edit Question
                        </button>
                    </p>
                </div>
            </details>
            @endforeach
                <button class="buttonSubmit" onclick="window.location.href='/faq/create'">
                    Submit New Question
                </button>
        </div>
    </div>
@endsection
