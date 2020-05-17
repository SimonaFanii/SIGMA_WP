
<?php
include_once('links.php');
session_start();
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Sigma</a>
        </div>
        <div class="dropdown navbar-right" id="right">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                <h4>Zgjidh</h4>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="Llogaria.php">Llogaria</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>