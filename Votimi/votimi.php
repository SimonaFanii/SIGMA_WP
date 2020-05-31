<?php
include_once('userHeader.php');
include_once('../links.php');
include_once('codi_votim.php');
?>

<!Doctype html>
<html>
<head>
    <link rel="stylesheet" href="radiobuttons.css?<?php echo time(); ?>"/>
    <link rel="stylesheet" type="text/css" href="../css/identifikimi.css?<?php echo time(); ?>" />
    <style>
        form{
            padding: 40px 0;
        }
        .btn-voto {
            background-color: #601563;
            padding: 8px 70px;
            border: 1px solid white;
            color: white;
            border-radius: 25px;
        }
        .fas{
            color: white
        }
        .btn-voto:hover {
            background-color: #ffffff;
            border: 1px solid #601563;
            color: #601563;
        }
        .box{
            background-color:white;
            margin:20px 30px;
            height:100%;
        }
        .container{
            color:#B079D0;
        }
        
    </style>
</head>

<body>
            <div class="row row-second" style="background-color: #efe4f5;">
            <div class="col-md-3"></div>
            <div class="col-md-6 d-flex flex-column mt-3">
                <div class="info-card-voto d-flex flex-column justify-content-center align-items-center">
                    <h4 style="color:white">Kandidated per deputet <b>(<?php echo $qyteti; ?>)</b></h4>
                </div>
            <div class="voto-form d-flex flex-column justify-content-center align-items-center">
            <form action="" method="post">
                <?php
                echo " <span style='color:red'> $error </span>";
                while ($row = mysqli_fetch_array($resultKandidat)) {
                    echo '
                    <label class="container">'.$row['Firstname'].' '.$row['Lastname'].'
                    <input type="radio" name="radio" value="'.$row['ID'].'">
                    <span class="checkmark"></span>
                    </label>
                    ';
                }
                ?>
                <input type="submit" name="submit" class="btn-voto mt-5" value="Voto" />
                </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>

