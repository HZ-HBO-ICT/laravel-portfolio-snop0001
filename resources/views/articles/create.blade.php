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
    <title> New Post</title>
    <meta name="description"
          content="Creating a new post">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

<header>
    <div class="grid-Header">
        <div>
            <h1> Creating New Post Page: </h1>
        </div>
        <div class="hz-logo">
            <img id="hz-logo" alt="HZ logo" src="/img/logo.png">
        </div>
        <div class="my-logo"><img id="my-logo" alt="my-logo" title="my-logo" src="/img/my-logo.png"></div>
    </div>
</header>

<main>
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
    <img alt="Picture of decorative flowers" src="/img/flowersBlog.png">
</main>

<footer>
    <nav>
        <ul class="footer-Menu">
            <li><a href="#" onclick="history.go(-1)">Return to Previous Page</a></li>
        </ul>
    </nav>

</footer>

</body>
</html>
