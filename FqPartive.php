<!DOCTYPE html>
<html lang="en">
<head>

  <title>Faqja e Partive </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  overflow: center;
}

th, td {
  text-align: center;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #B079D0;
}
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

  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #01001F;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(40%);
    filter: grayscale(40%); /* ben te gjitha fotot ne nje nivel te caktuar ne ngjyr gri*/
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /*fsheh carousel-text kur ekrani eshre me pak se 600px */
    }
  }
  .bg-1 {
    background:  #01001F;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color:#601563 ;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #601563;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }


  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #01001F ;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
  <?php
  require 'lidhjameDB.php'; ?>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">Sigma</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <li><a href="#myPage">HOME</a></li>
        <li><a href="#Partite">Partite</a></li>
        <li><a href="#Perfaqsuesit">Perfaqsuesit</a></li>
        <li><a href="#Histori">Histori</a></li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Me Shume
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://www.balkanweb.com/partite-politike-ne-shqiperi-perceptohen-si-me-te-korruptuarat-e-rajonit.com/
              "target="_blank">Imazhe</a></li>
            <li><a href="https://www.rtsh.al/lajme/reforma-zgjedhore-perfundon-mbledhja-e-pare-e-keshillit-politik/" target="_blank">Ekstra</a></li>
            <li><a href="https://journals.sagepub.com/doi/abs/10.1177/1940161210367422.com/" target="_blank">Media</a></li>
          </ul>
        </li>
        <li><a href="#demo1" data-toggle='collapse'><span class="glyphicon glyphicon-search" >
            </span></a>  </li>

            <div id="demo1" class="collapse ">

              <form  action="" method="post">

                  <div class="form-group">
                  <label class="col-lg-2 control-label">EMRI</label>
                     <div class="col-lg-4">
                       <input type="text" name="Firstname" class="form-control" placeholder="Emri" >
                  </div>
                        </div>
                          <div class="form-group">

                          <label class="col-lg-2 control-label">MbIemri</label>
                             <div class="col-lg-4">
                               <input type="text" name="Lastname" class="form-control" placeholder="Mbiemri" >
                          </div>
                  </div>



                    <div class="form-group">
                    <label class="col-lg-2 control-label">Partia</label>
                    <div class="col-lg-4">
                      <?php  require 'lidhjameDB.php';

                                  $query = "SELECT * FROM tbluser";
                                  $run = mysqli_query($conn,$query);
                                  echo "<select id='select'name='partia'  class='form-control'>";
                                  echo "<option> Zgjidh Partine</option>";
                                  while($row = mysqli_fetch_array($run))
                                  {
                                      echo "<option>$row[Partia]</option>";
                                  }
                                  echo "</select>";
                                  ?>
                    </div>            </div>
                      <div class="form-group">
                      <label class="col-lg-2 control-label">Qyteti</label>
                      <div class="col-lg-4">
                        <?php  require 'lidhjameDB.php';

                                    $query = "SELECT * FROM tbluser";
                                    $run = mysqli_query($conn,$query);
                                    echo "<select id='select'name='qyteti'  class='form-control'>";
                                    echo "<option> Zgjidh Qyetetin</option>";
                                    while($row = mysqli_fetch_array($run))
                                    {
                                        echo "<option>$row[Qyteti]</option>";
                                    }
                                    echo "</select>";
                                    ?>
                      </div>
                     </div>
                       <div class="form-group">
                      &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;
                         <input type="submit" name="submit" class="lg-3 btn btn-danger" value="Kerko"  onclick='window.location="#tabb"'></input>


                      </div>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators/ose treguesit -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Per faqet -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="titi.jpg" alt="Zgjedhjet" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Zdhedhjet</h3>
          <p>Zgjedhjet ne Shqiperi.</p>
        </div>
      </div>

      <div class="item">
        <img src="evoting.jpg" alt="Imazhe" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Partite</h3>
          <p>Disa parti politike.</p>
        </div>
      </div>

      <div class="item">
        <img src="vote.jpg" alt="Partite" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Partite</h3>
          <p>Partite politike ne Shqiperi</p>
        </div>
      </div>
    </div>

    <!-- Kontrollet majtas djathtas -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


<div id="Partite" class="container text-center">
  <h3><b>INFORMACION</b></h3>
  <p><em>Informacion Elektoral</em></p>
  <p> Partitë politike në Shqipëri janë duke kuruar me shumë kujdes imazhin e tyre në aktivitetet publike, në një kohë që po e orientojnë intensivisht komunikimin me votuesit në hapësirat e rrjeteve sociale.
       Partitë politike nuk kanë pritur afatin ligjor për fillimin e fushatës elektorale, që parashikon vetëm një muaj para ditës së votimeve, por me padurim janë duke zhvilluar prej javësh aktivitete të ndryshme publike për të sensibilizuar në çdo cep të vendit mbështetësit dhe të pavendosurit. Bie në sy kujdesi deri në detaj për gjithçka që lidhet me procesin elektoral, në mënyrë të veçantë që media ta përcjellë me sa më shumë kolorit atmosferën tek mbështetësit, mesazhet dhe gjestikulacionet e lidershipit, sfondin me flamujt, simbolet e logot partiake etj. Edhe për zgjedhjet parlamentare të 23 qershorit 2013 një gjë është e sigurt në angazhimin e shtabeve elektorale: mbulimi mediatik për takimet dhe mitingjet publike do të realizohet nga vetë ato dhe do ju përcillet redaksive të gazetarëve si një produkt i gatshëm.
       Aspekti i dytë i dukshëm është shpenzimi i mjaft energjive nga kandidatët për deputetë dhe subjektet politike për të përdorur rrjetet sociale në komunikim me votuesit. Si asnjëherë tjetër në fushatat e mëparshme ata po tregohen shumë aktivë dhe interaktivë me gjithçka postohet në Facebook, Twitter etj., duke bërë një harmonizim të kontakteve reale me ato virtuale të elektoratit të tyre </p>
  <br>

  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Partia A</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="ps.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Partia A u themelua në vitin 1941 me emrin Partia A dhe në vitin 1948 ndërroi emrin duke u quajtur Partia e Punës se Shqipërisë. PPSH-ja ishte një parti marksisto-leniniste dhe udhëhoqi në formën më ekstreme. Vizioni i saj komunist ishte ndër më të rreptit. Ajo mori pushtetin në vitin 1946 dhe i dha jetë sistemit më të egër diktatorial në Evropën e bllokut Sovjetik. Ishte Shqipëria i pari shtet ne Evropë i cili ndaloi fenë me ligj kushtetues duke ndaluar kështu ushtrimin e besimit jo vetëm nëpër institucione fetare por edhe ne kushte shtepijake. Partia A u udhëhoq qysh nga fillimi nga Enver Hoxha, i cili që nga viti 1944 e deri në vitin 1954 ushtroi njëkohësisht dhe funksionin e Kryeministrit, dhe funksionin e Ministrit te Jashtëm. Shqipëria nën drejtimin e Enver Hoxhes ndoqi veç të tjerash dhe politiken e izolimit nga bota.</p>

      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Partia B</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="pd.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Partia B e Shqiperisë u krijua më 11 dhjetor të vitit 1990 nga një grup studentësh dhe intelekualësh shqiptarë midis të cilëve Azem Hajdari, Sali Berisha, Gramoz Pashko, Arben Imami, Aleksandër Meksi, Eduard Selami etj. Kryetar i Komisionit Nismëtar të Partisë Demokratike u zgjodh studenti Azem Hajdari. Me vonë kryetar i Partisë B u zgjodh Bekim Losti. Ajo ishte partia e parë opozitare pas lejimit të pluralizmit politik në Shqipëri.Në zgjedhjet parlamentare të marsit të vitit 1991, Partia B nuk arriti të fitojë shumicën në parlament. Në zgjedhjet e parakohëshme parlamentare të 22 marsit të vitit 1992 Partia B fitoi shumicën absolute të vendeve në parlament. </p>

      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Partia C</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="lsi1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Paria C  është parti politike në Shqipëri. Emri i plotë i partisë partia centralizuar të cilat përdoren në simbolin, flamurin, vulën dhe në të gjithë dokumentat zyrtare të partisë. Kjo parti u krijua në vitin 2004. Kryetar  që nga themelimi ishte Lelo Pando por me zgjedhjen e këtij të fundit si Presidenti i Shqipërisë në krye të partisë ne prill 2017 u zgjodh Petrit Vasili. Pas rezultateve të zgjedhjeve të 25 qershorit 2017, pas dorëheqjes së kryetarit Petrit Vasili, i cili propozoi ndryshim të kryesisë së partisë, duke propozuar si kryetare Elisa Peku, nenkryetarë Luan Rama dhe Erisa Xhixho dhe sekretar të përgjithshëm Endrit Brahimllari. Me votim te hapur, ku morën pjesë 2300 delegatë, propozimi i Petrit Vasili u pranua duke shpallur kryetaren e parë femër të një partie politike në shqipëri.</p>

      </div>
    </div>
  </div>
</div>


<!-- Container (Seksioni i perfaqsuesve) -->
<div id="Perfaqsuesit" class="bg-1">
  <div class="container">


    <h3 class="text-center">Lideret e partive kryesore!</h3>
    <p class="text-center">Ne Shqiperi partite politike drejtohen nga liderat e tyre.Me poshte kemi vendosur te paraqesim vetem tre partite kryesore te vendit dhe udheheqesit perkates te seciles prej tyre
     <br> Mos harroni te lini nje koment </p>

     <?php
     $sql = "SELECT Firstname, ID FROM tbluser  ;" ;
        $result = mysqli_query($conn,$sql);
     $datas = array();
  if(mysqli_num_rows($result)>0)
  {
  while ($row=mysqli_fetch_assoc($result)) {
  $datas[]=$row;
 }
}     ?>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="edi.jpg" alt="Edi" width="400" height="300">

          <p><strong>
              <?php
              foreach ($datas[0] as $data) {
             echo $data;

           }
           ?>
        </strong>  </p>
            <a href="FqProfilit.php?GetID=<?php echo $data ?>" class="btn btn-primary stretched-link">Perfaqsuesi A</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="femer.png" alt="Luli" width="400" height="300">
          <p> <strong>
            <?php
            foreach ($datas[1] as $data) {
           echo $data;
         }
         ?>
      </strong>  </p>
          <a href="FqProfilit.php?GetID=<?php echo $data ?>" class="btn btn-primary stretched-link">Perfaqsuesi B</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="liri.jpg" alt="Liri" width="400" height="300">
          <p> <strong>
        <?php
             foreach ($datas[2] as $data) {
            echo $data;
          }
          ?>
          </strong>  </p>
          <a href="FqProfilit.php?GetID=<?php echo $data ?>" class="btn btn-primary stretched-link">Perfaqsuesi C</a>
        </div>
      </div>

     </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Opinione </h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class=" glyphicon glyphicon-comment"></span> Lini nje koment </label>
              <input type="text" class="form-control" id="psw" placeholder="shkruaj ketu">
            </div>


              <button type="submit" class="btn btn-block">Dergo
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Anullo
          </button>
          <p>Deshironi <a href="#">ndihme?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Seksioni i historis) -->
<div id="Histori" class="container">
  <h3 class="text-center"><b>INFORMACION HISTORIK</b></h3>
  <p class="text-center"><em>Mbi historine e partive!</em></p>

  <div class="text-center">

  <p>Në Shqipëri historia e lindjes së forcave të para politike fillon me momentin e krijimit të institucionit të parë parlamentar në vitin 1920. Kur në Kongresin e Lushnjës u krijua Këshilli Kombëtar, ose parlamenti i parë shqiptar nuk ekzistonin forcat politike.. Pikërisht veprimtaria e sapo nisur e qeverisë dhe e Kuvendit shërbeu si nxitje për krijimin e grupeve të deputetëve që mbështesnin apo kundërshtonin qeverinë. Më 10 tetor 1920 një grup deputetësh shpallën programin politik të Partisë Popullore Kombëtare të drejtuar nga Fan Noli, Ahmet Zogu, Eshref Frashëri, Luigj Gurakuqi, etj. Rreth një muaj më vonë, në nëndor 1920 deputetë të tjerë shpallën krijimin e një force tjetër politike të quajtur Partia Përparimtare Shqiptare me drejtues figura të njohura të Veriut si Hoxhë Kadriu, Hasan Prishtina, Bajram Curri, por edhe beun më të pasur të Shqipërisë, Shefqet Vërlaci. Kjo ndarje u “institucionalizua” kur një grup prej 18 deputetësh, të vetëshpallur opozitarë dhe që përbënin gjysmën e Këshillit Kombëtar, dhanë dorëheqje duke kërkuar zgjedhje të reja. Pas zgjdhjeve të vitit fillimit të vitit 1921, në Këshillin e ri Kombëtar përfaqësoheshin dy grupime kryesore politike: Partia Popullore dhe Partia Përparimtare. Pas kësaj fillon historia e përçarjeve dhe përplasjeve brënda grupimeve të bazuara në lidhjet e interesave personale apo klanore. Megjithë programet politike të shpallura prej tyre, ato nuk ishin parti të mirëfillta politike, por grupime të motivuara për marrjen e pushteti.</p>
    <br>
    <br>
    <br>
    <div>

</div>
        <div class="row" >
    <div class="m-auto">

    <a href="#demo4" data-toggle="collapse"><h2>Tabela e kandidateve</h2></a>
        <div class="container" id="tabb">
      <div id="demo4" class="collapse">
      <p><table id="datatableid" class="table table-striped table-bordered ">
        <thead>
          <tr>
          <th >ID</th>
          <th>Emri</th>
          <th>Mbiemri</th>
          <th>Karte</th>
          <th>Roli</th>
          <th>Mosha</th>
          <th>Emaili</th>
          <th>Partia</th>
          <th>Qyeteti</th>
      </tr>
      </thead>

      <tbody>
      <?php


      include("lidhjameDB.php");

      if(!isset($_POST['submit'])){
      $sql = "SELECT * FROM tbluser  where Roli='Kandidate';" ;
      $result = mysqli_query($conn,$sql);
      $resultCheck = mysqli_num_rows($result);

      if($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {

      $ID= $row["ID"] ;
      $Emri= $row["Firstname"] ;
      $Mbiemri= $row["Lastname"] ;
      $Emaili=$row["Email"];
      $Karte = $row["KarteID"] ;
      $Roli =$row["Roli"];
      $mosha =$row["Mosha"];
      $partia=$row["Partia"];
      $qyteti=$row["Qyteti"];
      ?>
   <td> <a href="FqProfilit.php?GetID=<?php echo $ID ?>"> <?php echo $ID  ?></a></td>
   <td>  <?php echo $Emri  ?></td>
   <td>  <?php echo $Mbiemri  ?></td>
   <td>  <?php echo $Karte  ?></td>
   <td>  <?php echo $Roli  ?></td>
   <td>  <?php echo $mosha  ?></td>
   <td>  <?php echo  $Emaili?></td>
   <td>  <?php echo  $partia?></td>.
   <td>  <?php echo  $qyteti?></td>
   </tr>
   <?php
   }
   }
   else{
   ?>
   <tr>
   <td>ska te dhena </td>
   </tr>
   <?php
   }
   }
   else {
     $Emri = $_POST["Firstname"] ;
   $Mbiemri = $_POST['Lastname'];
   $partia = $_POST["partia"];
   $qyteti=$_POST["qyteti"];


        if ($Emri!=""||$partia!="" ||$Mbiemri!=""||$qyteti!="") {

            $sql = "SELECT * FROM tbluser WHERE  Roli='Kandidate' and
            Firstname = '$Emri' ||  Lastname = '$Mbiemri' || Partia='$partia'  || Qyteti='$qyteti' ;" ;
              $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0) {
         while ($row = mysqli_fetch_assoc($result)) {

     $ID= $row["ID"] ;
     $Emri= $row["Firstname"] ;
     $Mbiemri= $row["Lastname"] ;
     $Emaili=$row["Email"];
     $Karte = $row["KarteID"] ;
     $Roli =$row["Roli"];
     $mosha =$row["Mosha"];
     $partia=$row["Partia"];
     $qyteti=$row["Qyteti"];

     ?>
  <tr>
     <td> <a href="FqProfilit.php?GetID=<?php echo $ID ?>"> <?php echo $ID  ?></a></td>
     <td>  <?php echo $Emri  ?></td>
     <td>  <?php echo $Mbiemri  ?></td>
     <td>  <?php echo $Karte  ?></td>
     <td>  <?php echo $Roli  ?></td>
     <td>  <?php echo $mosha  ?></td>
     <td>  <?php echo $Emaili?></td>
     <td>  <?php echo $partia?></td>.
     <td>  <?php echo $qyteti?></td>
  </tr>
     <?php
   }
   }
     else{
     ?>
     <tr>
     <td>ska te dhena </td>
     </tr>
     <?php
   }
   }}
   ?>
   </tbody>
</table>
    </p>
  </div>
  </div>
</div>
  </div>

  <br>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Stafi</a></li>
    </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Faleminderit</h2>
      <p>Shpresojm te keni gjetur informacionin e nevojshem</p>
    </div>
  </div>
</div>


<img src="hie.jpg" class=" img-responsive" style="width:100%" "height:100%">

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>

  <p> <div class="footer">
          <p>sistemi politik<b>2020</b></p>
        </div></p>
      </footer>


<script>
$(document).ready(function(){
  //  Inicializojm Tooltip
  $('[data-toggle="tooltip"]').tooltip();


        // Shton nje  smooth scrolling tek te gjithe  linqet ne navbar + footer
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // this.hash Duhet ptjt te ket nje vlere perpara default behavior.
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // vendosim hash
      var hash = this.hash;

      // Perdorim animate() metoden e jQuer per page scroll
      // Numri opsiona; (900) specifikon miliona sekondat qe duhen per te scroll nje zon te caktuar.
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Shtojm nje hash(#) tek URL kur mbaroojm  scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // Fund
  });
})
</script>

</body>
</html>
