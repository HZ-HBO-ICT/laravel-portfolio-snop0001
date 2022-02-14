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
   @yield('head')
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

@yield('ict-main')
<main>
    @yield('content')
    <img alt="Picture of decorative flowers" src="/img/flowersBlog.png" >
</main>

<footer>
    <nav>
        <ul class="footer-Menu" >
            <li> <a href="#" onclick="history.go(-1)">Return to Previous Page</a></li>
        </ul>
    </nav>

</footer>

</body>
</html>
