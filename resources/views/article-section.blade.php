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
    <title> Article Section Blog Post</title>
    <meta name="description"
          content="Article Section Blog Post Shirel Snopik">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

<header>
    <div class="grid-Header">
        <div>
            <h1 > Post Page: </h1>
        </div>
        <div class="hz-logo">
            <img id="hz-logo" alt="HZ logo" src="/img/logo.png">
        </div>
        <div class="my-logo"> <img id="my-logo" alt="my-logo" title="my-logo" src="/img/my-logo.png"> </div>
    </div>
</header>

<main>

    <article class="blog-article">
        <h2 class="blog-post"> Nesting Article in Section or Vice Versa?</h2>
        <br>
        <p class="blog-post"> In my opinion the Section element should be inside of the Article element. Article is meant
            to represent individiual parts of text that dont necessary have a connection between them in terms of structure of text, in contrast to
            Sections which are meant to define parts of the same text such as "Description","content","contact" etc. so they should appear in a certain order.
            Therfore, in my opinion an Article will be built by a number of Sections to form a proper text.
        </p>
    </article>
    <img alt="Picture of decorative flowers" src="/img/flowersBlog.png" >
</main>

<?php require "style/blog-footer.php"?>
</body>
</html>
