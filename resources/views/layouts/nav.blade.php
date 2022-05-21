<nav>
    <ul class="nav-list">
        <li> <a class="{{Request::is('/') ? 'active':''}}" href="/">Home Page</a></li>
        <li> <a class="{{Request::is('profile') ? 'active':''}}" href="/profile"> Profile</a></li>
        <li> <a class="{{Request::is('grade') ? 'active':''}}" href="/grade">Dashboard</a> </li>
        <li> <a class="{{Request::is('faq') ? 'active':''}}" href="/faq">FAQ</a></li>
        <li> <a class="{{Request::is('article') ? 'active':''}}" href="/article">Blog</a></li>
        <li style="float: right;"> <a href="#" onclick="history.go(-1)">Back</a></li>
    </ul>
</nav>
