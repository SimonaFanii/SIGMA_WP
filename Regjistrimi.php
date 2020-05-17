<!--
layouti i faqes se rregjistrimit
-->
<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #cc1d2d;
        }
    </style>
    <!-- <link rel="stylesheet" href="./css/regjistrimi.css"/> -->
    <link rel="stylesheet" type="text/css" href="./css/regjistrimi.css?<?php echo time(); ?>" />
    <style>
        .cover {
            height: 50vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .col-md-12 {
            padding: 0px !important;
        }

        .col-md-8 {
            padding: 0px !important;
            /* margin-top:-300px */
        }

        .first-row {
            margin-right: 0px !important;
            margin-left: 0px !important;
            font-family: 'Questrial', sans-serif;
            font-size: 13px;
            font-weight: bolder;
            background-color: rgba(176, 121, 208, 0.2);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .button {
            background-color: white;
            outline: 0px !important;
            width: 100%;
            font-size: 20px;
        }

        .kandidat {
            border: 2px solid #01001F;
            border-radius: 25px 0 0 25px;
            border-right: 0px;
            background-color: #601563;
            border: 2px solid #601563;
            border-right: 0px;
        }

        .votues {
            border: 2px solid #01001F;
            border-radius: 0 25px 25px 0;
            border-left: 0px;
        }

        .kandidat a {
            color: #ffffff;
        }

        .votues a {
            color: #0063B4;
        }

        .kandidat:hover {
            background-color: #601563;
            border: 2px solid #601563;
            border-right: 0px;
        }

        .votues:hover {
            background-color: #0063B4;
            border: 2px solid #0063B4;
        }

        .button a:hover {
            color: #ffffff;
        }
    </style>
</head>

<body>
    <?php
    include_once('header.php');
    include_once('links.php');
    require_once "codi_rregjistrimit.php";
    ?>
    <main>
        <div class="row first-row">
            <div class="col-md-12 cover" style="background-image:url('./fotot/cover1.jpg')"></div>
            <div class="col-md-2"></div>
            <div class="col-md-8 d-flex flex-row justify-content-around align-items-center">
                <button class="button kandidat"><a class="nav-link" href="./Regjistrimi.php">Regjistrohu si kandidat</a></button>
                <button class="button votues"><a class="nav-link" href="./RregjistrimiVot.php">Regjistrohu si votues</a></button>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row row-second">
            <div class="col-md-3"></div>
            <div class="col-md-6 d-flex flex-row">
                <div class="info-card d-flex flex-column justify-content-center align-items-center">
                    <h2>Sigma</h2>
                    <h6><b>e-voting</b></h6>
                    <img src="./fotot/voto.svg" width="200px" height="200px" alt="voto" />
                    <!-- <button class="btn-regjitrohu"><a href="zgjidhRegjistrim.php">Regjistrohu</a></button>
            <button class="btn-identifikohu"><a href="Identifikimi.php">Identifikohu</a></button> -->
                </div>
                <div class="register-form d-flex flex-column justify-content-center align-items-center">
                    <h2>Sigma</h2>
                    <h6><b>e-voting</b></h6>
                    <form method="POST" action="">
                        <div class="form-group pt-2">
                            <label class="control-label" for="id">* Nr. i kartes se identitetit:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-address-card"></i></div>
                                </div>
                                <input type="text" name="id" class="form-control" id="id" placeholder="Vendos id" value="<?php echo $id; ?>">
                            </div>
                            <span class="error"> <?php echo  $iderr; ?></span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="emri">* Emri:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-user"></i></div>
                                </div>
                                <input type="text" name="emri" class="form-control" id="emri" placeholder="Vendos Emrin" value="<?php echo $emri; ?>">
                            </div>
                            <span class="error"><?php echo  $emrierr; ?></span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="mbiemri">* Mbiemri:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-user"></i></div>
                                </div>
                                <input type="text" name="mbiemri" class="form-control" id="mbiemri" placeholder="Vendos mbiemrin" value="<?php echo $mbiemri; ?>">
                            </div>
                            <span class="error"> <?php echo  $mbiemrierr; ?></span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="mosha">* Mosha:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-sort-numeric-up"></i></div>
                                </div>
                                <input type="number" name="mosha" class="form-control" id="mosha" placeholder="Vendos moshen" value="<?php echo $mosha; ?>">
                            </div>
                            <span class="error"> <?php echo  $moshaerr; ?></span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email">* Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                </div>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Vendos email" value="<?php echo $email; ?>">
                            </div>
                            <span class="error"> <?php echo  $emailerr; ?></span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pwd">* Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-unlock"></i></div>
                                </div>
                                <input type="password" name="password" class="form-control" id="pwd" placeholder="Vendos password">
                            </div>
                            <span class="error"> <?php echo  $passworderr; ?></span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pwd1">* Konfirmo Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-unlock"></i></div>
                                </div>
                                <input type="password" name="password1" class="form-control" id="pwd1" placeholder="Ri-vendos password">
                            </div>
                            <span class="error"> <?php echo  $password1err; ?></span>
                        </div>
                        <div class="checkbox pb-1">
                            <input type="checkbox" name="cb" id="cb" value="">
                            <span>I agree to the terms of service</span>
                        </div>
                        <div class="form-group">
                        <input type="submit" name="regjistrohu" class="btn-register pt-2" value="Regjistrohu"></div>
                        <form />
                        <div class="pt-2">Keni nje llogari? Shkoni te <a href="Identifikimi.php">Identifikim</a>
                            <div />
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