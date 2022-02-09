<?php $page = $_SERVER["REQUEST_URI"]?>
<?php trim($page, '/') ?>

<div class="hz-logo">
            <img id="hz-logo" alt="HZ logo" src="/img/logo.png">
        </div>
        <div class="my-logo"> <img id="my-logo" alt="my-logo" title="my-logo" src="/img/my-logo.png"> </div>
        <div>
            <nav>
                <ul class="nav-list">

                    <?php if($page === '/') {
                        echo '<li> <a href="/" class="active"> Home Page </a> </li>';
                    }else {
                        echo '<li> <a href="/"> Home Page </a> </li>';
                    }
                    ?>

                    <?php if($page === '/profile') {
                        echo '<li> <a href="/profile" class="active"> Profile </a> </li>';
                    }else {
                        echo '<li> <a href="/profile"> Profile </a> </li>';
                    }
                    ?>

                    <?php if($page === '/dashboard') {
                        echo '<li> <a href="/dashboard" class="active"> Dashboard </a> </li>';
                    }else {
                        echo '<li> <a href="/dashboard"> Dashboard </a> </li>';
                    }
                    ?>

                    <?php if($page === '/faq') {
                        echo '<li> <a href="/faq" class="active"> FAQ </a> </li>';
                    }else {
                        echo '<li> <a href="/faq"> FAQ </a> </li>';
                    }
                    ?>

                    <?php if($page === '/blog') {
                        echo '<li> <a href="/blog" class="active"> Blog </a> </li>';
                    }else {
                        echo '<li> <a href="/blog"> Blog </a> </li>';
                    }
                    ?>

                    <li style="float: right;"> <a href="#" onclick="history.go(-1)">Back</a></li>
                </ul>
            </nav>
        </div>

    </div>
</header>
