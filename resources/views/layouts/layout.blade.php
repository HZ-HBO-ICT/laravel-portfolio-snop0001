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
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<header class="{{Request::path() === '/' ? 'home':''}}">

    <div class="grid-Header">
        <div>
            <div>
                @yield('header-title')
            </div>
        </div>

    <div class="hz-logo">
        <img id="hz-logo" alt="HZ logo" src="/img/logo.png">
    </div>
    <div class="my-logo"> <img id="my-logo" alt="my-logo" title="my-logo" src="/img/my-logo.png"> </div>
    <div>
       @include('layouts.nav')
    </div>

    </div>
  </header>


    @yield('side-bar')


  <main>
    @yield('content')
  </main>

@include('layouts.footer')

@yield('script')
</body>

</html>

