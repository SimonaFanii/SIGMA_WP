<!--
Layouti i faqes se identifikimit
-->
<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #cc1d2d;
        }
        
        .cover {
            height: 50vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .col-md-12 {
            padding: 0px !important;
        }
    </style>
    <!-- <link rel="stylesheet" href="./css/identifikimi.css"/> -->
    <link rel="stylesheet" type="text/css" href="./css/identifikimi.css?<?php echo time(); ?>" />
</head>

<body>
    <?php
    include_once('header.php');
    include_once('links.php');
    require_once "code_identifikim.php";
    ?>

    <main>
        <div class="row first-row">
            <div class="col-md-12 cover" style="background-image:url('./fotot/cover3.jpg')"></div>
        </div>
        <div class="row row-second">
            <div class="col-md-3"></div>
            <div class="col-md-6 d-flex flex-row">
                <div class="info-card d-flex flex-column justify-content-center align-items-center">
                    <h2>Sigma</h2>
                    <h6><b>e-voting</b></h6>
                    <img src="./fotot/voto.svg" width="200px" height="200px" alt="voto" />
                    <button class="btn-regjitrohu"><a href="Regjistrimi.php">Regjistrohu</a></button>
                    <!-- <button class="btn-identifikohu"><a href="Identifikimi.php">Identifikohu</a></button> -->
                </div>
                <div class="login-form d-flex flex-column justify-content-center align-items-center">
            <h2>Sigma</h2>
            <h6><b>e-voting</b></h6>
            <?php if (!empty($loginErr)) {echo "<div class=\"alert alert-danger m-3\" role=\"alert\">
                 $loginErr
            </div>";} ?>
            <form method="POST" action="">
            <div class="form-group pt-2">
                <label class="control-label" for="id">Id</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-address-card"></i></div>
                    </div>
                    <input type="text" class="form-control" <?php echo "style=\"border-bottom:1px solid $borderColor !important\"" ?> name="id" id="eid" placeholder="Vendos Id" value="<?php echo $id; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="email">Email:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-envelope"></i></div>
                    </div>
                    <input type="email" class="form-control" <?php echo "style=\"border-bottom:1px solid $borderColor !important\"" ?> name="email" id="email" placeholder="Vendos email" value="<?php echo $email; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="pwd">Password:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-unlock"></i></div>
                    </div>
                    <input type="password" class="form-control" <?php echo "style=\"border-bottom:1px solid $borderColor !important\"" ?> name="password" id="pwd" placeholder="Vendos password" required>
                            </div>
                        </div>
                        <button type="submit" name="login" class="btn-login pt-2">Identifikohu</button>
                        <form />
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </main>
</body>

</html>
<?php
include_once('footer.php');
?>