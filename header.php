<?php
include_once('links.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Faqja Kryesore</title>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
    <style>
        nav {
            background-color: rgba(255, 255, 255, 0.58);
        }

        .navbar-brand {
            font-size: 30px;
            font-weight: bold;
            font-family: 'Inconsolata', sans-serif;
            background: -webkit-linear-gradient(#407BFE, #0063B4, #B079D0, #601563);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .navbar-nav a {
            color: #01001F !important;
        }
    </style>
    <script>
    document.addEventListener("DOMContentLoaded", function(e) {
        var id = window.localStorage.getItem('sigma');
        if(id){
           $('#identifikohu').css('display','none');
           $('#regjistrohu').css('display','none');
           $('#logout').css('display','block');
        }
        else if(!id){
            $('#identifikohu').css('display','block');
           $('#regjistrohu').css('display','block');
            $('#logout').css('display','none');
        }
        
    });
    </script>
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">Sigma</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Faqe kryesore</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="Rezultati.php">Rezultati</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="FqPartive.php">Partite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rrethnesh.php">Rreth nesh</a>
                </li>
                <li class="nav-item" id='identifikohu'>
                    <a class="nav-link" href="Identifikimi.php">Identifikohu</a>
                </li>
                <li class="nav-item" id='regjistrohu'>
                    <a class="nav-link" href="Regjistrimi.php">Regjistrohu</a>
                </li>
                <li class="nav-item" id="logout">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>