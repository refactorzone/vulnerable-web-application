<?php
/**
 * Warning! This code was written to be broken ON PURPOSE! Every single piece of it is bad quality ON PURPOSE! DON'T
 * EVER USE THIS FOR ANYTHING! PLEASE!
 */

require(__DIR__ . '/header.php');

if (!$_SESSION['user']) {
    header('Location: /');
}

?>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/dashboard.php">My Super Control Panel</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li<?php if ($path == '/dashboard.php') : ?> class="active"<?php endif; ?>><a href="/dashboard.php">Dashboard</a></li>
                <li<?php if ($path == '/adddomain.php') : ?> class="active"<?php endif; ?>><a href="/adddomain.php">Order</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Downloads</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
