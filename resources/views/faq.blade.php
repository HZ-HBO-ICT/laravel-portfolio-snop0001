<!DOCTYPE html>

<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Loop&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">
<html lang="en">


<head>
    <title> Frequently Asked Questions </title>
    <meta name="description"
          content="FAQ page for Shirel's Snopik website for school">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>

<body>

<header>
    <div class="grid-Header">
        <div>
            <h1>Frequently Asked Questions:</h1>
        </div>
        <?php require "style/head.php" ?>


<main>
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

            @foreach($questions as $question)
            <details>
                <summary>
                    {{$question->question}} </summary>
                <div class={{$question->class_name}}>
                    <p>
                        {!! $question->answer !!}
                    </p>
                </div>
            </details>
            @endforeach

        </div>
    </div>
</main>

<?php require "style/footer.php" ?>
</body>

</html>
