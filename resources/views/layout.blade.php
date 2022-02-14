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
<header>

    <div class="grid-Header">
        <div>
            <div>
                @yield('header-title')
            </div>
        </div>

    <?php $page = $_SERVER["REQUEST_URI"]?>
    <?php trim($page, '/') ?>

    <div class="hz-logo">
        <img id="hz-logo" alt="HZ logo" src="/img/logo.png">
    </div>
    <div class="my-logo"> <img id="my-logo" alt="my-logo" title="my-logo" src="/img/my-logo.png"> </div>
    <div>
        <nav>
            <ul class="nav-list">
                <li> <a class="{{Request::is('/') ? 'active':''}}" href="/">Home Page</a></li>
                <li> <a class="{{Request::is('profile') ? 'active':''}}" href="/profile"> Profile</a></li>
                <li> <a class="{{Request::is('dashboard') ? 'active':''}}" href="/dashboard">Dashboard</a> </li>
                <li> <a class="{{Request::is('faq') ? 'active':''}}" href="/faq">FAQ</a></li>
                <li> <a class="{{Request::is('blog') ? 'active':''}}" href="/blog">Blog</a></li>
                <li style="float: right;"> <a href="#" onclick="history.go(-1)">Back</a></li>
            </ul>
        </nav>
    </div>

        //active
    </div>
  </header>
  <main>
    @yield('content');
  </main>

<footer>
    <nav>
        <ul class="footer-Menu">
            <li> <a target="_blank"
                    href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf">
                    Course and Examination Regulations </a></li>
            <li> <a target="_blank"
                    href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf">The
                    IR of the HBO-ICT</a></li>
            <li> <a target="_blank" href="https://learn.hz.nl/">Learn Environment</a></li>
            <li> <a target="_blank"
                    href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">
                    First Year ICT Teams Channel</a></li>
            <li> <a target="_blank" href="https://apps.hz.nl/angular/studievoortgang/studiestatus"> Study Progress My HZ</a>
            </li>
            <li> <a target="_blank" href="https://github.com/HZ-HBO-ICT"> Github ICT-HZ</a></li>
        </ul>
    </nav>
</footer>


</body>

</html>
