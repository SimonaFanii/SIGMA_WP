<?php
include_once('header.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faqa kryesore</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

    <style type="text/css">
        .container-fluid {
            width: 100% !important;
        }

        .poster {
            height: 110vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .overlay {
            /* background-color: #00000075; */
            width: 30%;
            height: 100%;
            padding-left: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        .overlay h4 {
            color: #01001F;
            margin-top: 120px;
            font-family: 'Dancing Script', cursive;
        }

        .overlay span {
            color: #601563;
            font-family: 'Dancing Script', cursive;
            font-size: 30px;
        }

        .overlay h5 {
            color: #601563;
            font-family: 'Dancing Script', cursive;
            margin-bottom: 30px;
        }

        .poster button {
            /* margin-top: 210px; */
        }

        .btn-voto {
            background-color: #601563;
            padding: 10px 60px;
            border: 1px solid #ffffff;
            color: #ffffff;
            border-radius: 25px;
            margin-bottom: 10px;
        }

        .btn-voto:hover {
            background-color: #ffffff;
            border: 1px solid #601563;
            color: #601563;
        }

        .btn-profili{
            background-color: #407BFE;
            padding: 10px 40px;
            border: 1px solid #ffffff;
            color: #ffffff;
            border-radius: 25px;
            margin-bottom: 10px;
        }
        .btn-profili:hover{
            background-color: #ffffff;
            border: 1px solid #407BFE;
            color: #407BFE;
        }
        .col-md-12 {
            padding: 0px;
        }

        .pros .col-md-6 {
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: black;
            font-family: 'Questrial', sans-serif;
        }

        .pros img {
            height: 400px;
        }

        .one h2 {
            color: #601563;
        }

        .one p {
            color: #01001F;
            padding: 10px 40px;
        }

        .two h2 {
            color: #0063B4;
        }

        .two p {
            color: #01001F;
            padding: 10px 40px;
        }

        .three h2 {
            color: #01001F;
        }

        .three p {
            color: #01001F;
            padding: 10px 40px;
        }
    </style>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="poster" style="background-image:url('./fotot/main2.png')">
                        <div class="overlay">
                            <h4><span>"</span>
                                Votimi është shprehja e angazhimit tonë ndaj vetvetes, njëri-tjetrit, këtij vendi dhe kësaj bote.
                                <span>"</span></h4>
                            <h5><em>-Sharon Salzberg</em></h5>
                            <div>
                            <a href="Identifikimi.php"><button class="btn-voto">Voto tani</button></a>
                            <a href="#"><button class="btn-profili">Shko te  profili</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pros">
                <div class="col-md-6 two" style="background-color:#0063B420">
                    <h2>Efikasitet</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt error asperiores, perferendis vero laudantium, quibusdam expedita enim accusantium totam, doloribus pariatur nihil laboriosam ipsam odio autem consequuntur inventore id velit.</p>
                </div>
                <div class="col-md-6" style="background-color:#0063B420"><img src="./fotot/4.svg" width="100%" /></div>
                <div class="col-md-6" style="background-color:#60156320"><img src="./fotot/1.svg" width="100%" /></div>
                <div class="col-md-6 one" style="background-color:#60156320">
                    <h2>Votoni në çdo kohë nga kudo</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam deserunt consequuntur ad quis. Reprehenderit eum fugiat dolorem? Iusto sapiente eveniet aperiam assumenda, dignissimos maxime accusantium tempore possimus provident architecto laboriosam!</p>
                </div>
                <div class="col-md-6 three" style="background-color:#01001F20">
                    <h2>Saktësi</h2>
                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem porro doloribus voluptatum ad. Itaque sequi nobis ea, suscipit explicabo sapiente. Ad veritatis et architecto. Ipsam voluptate recusandae aspernatur magnam animi.</p>
                </div>
                <div class="col-md-6" style="background-color:#01001F20"><img src="./fotot/3.svg" width="100%" /></div>
            </div>
        </div>
        <main>
</body>

</html>
<?php
include_once('footer.php');
?>