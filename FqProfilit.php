<?php
include_once('header.php');
?>


<!DOCTYPE html>
<html lang="en">

<?php
require_once ("lidhjameDB.php");
?>

  <title>Profili kandidatit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

<!--//..-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="profili.css">

<?php
//if(isset($_POST['first']) && isset($_POST['last'])) lidhja me afishi
$ID=$_GET['GetID'];
$query = "SELECT * FROM tbluser WHERE ID = '".$ID."'";
$result=mysqli_query($conn,$query);

  while ($row=mysqli_fetch_assoc($result)) {


    $ID= $row["ID"] ;
    $Emri= $row["Firstname"] ;
    $Mbiemri= $row["Lastname"] ;
    $Emaili=$row["Email"];
    $Karte = $row["KarteID"] ;
    $Passwordi =$row["Password"];
    $Roli =$row["Roli"];
    $mosha =$row["Mosha"];
    $Partia=$row["Parti"];
    $Qyteti=$row["qyteti"];
    $platforma=$row["platforma"];
    $NUIK=$row["NuiK"];
    $NUIV=$row["NuiV"];

  }
    ?>

</head>

<body>


<div class="container">
  <div class="profile-header">
    <div class="profile-img">
      <img src="edi.jpg" width="200" alt="Profile Image">

    </div>
    <div class="profile-nav-info">
  <h2>
      <?php
      echo "$Emri &nbsp";
      echo "$Mbiemri";

       ?>
  </h2>

      <div class="address">

 <span id="country" class="country">     <?php echo  "$Qyteti " ; ?>

    <span id="country" class="country">  Shqiperi.</span>
      </div>
    </div>
    <div class="profile-option">
      <div class="notification">
        <i class="fa fa-bell"></i>
        <span class="alert-message">3</span>
      </div>
    </div>
  </div>

  <div class="main-bd">
    <div class="left-side">
      <div class="profile-side">
        <p class="mobile-no"><i class="fa fa-phone"></i> +3556884546</p>
        <p class="user-mail"><i class="fa fa-envelope"></i>  <?php   echo "$Emaili";?></p>
        <div class="user-bio">
          <h2 class="text-center">Bio</h2>

          <?php

              echo "ID: ". $ID. "<br>";
              echo"Emri: ". $Emri."<br>" ;
              echo "Mbiemri: ". $Mbiemri."<br>" ;
              echo "Mosha: ".$mosha."<br>";
              echo "Karte ID: ".$Karte."<br>" ;
              echo "Qyteti: ".$Qyteti."<br>";
              echo "Partia: ".$Partia."<br>";
              echo "Nr Kandida: ".$NUIK . "<br>";
              echo  $Emaili."<br>" ;

/*
                }  }}*/
?>
        </div>
        <div class="profile-btn">
          <button class="chatbtn" id="LogOut" onclick="window.location.href = 'logout.php?GetID=<?php echo $ID ?>';">  <i class="fa fa-sign-out"></i> LogOut </button>
          <button class="createbtn" id="VOTO" onclick="window.location.href = 'voto.php';">  <i class="fa fa-check"></i> Voto</button>
        </div>
        <div class="user-rating">
          <h3 class="rating">5/5</h3>
          <div class="rate">
            <div class="star-outer">
              <div class="star-inner">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <span class="no-of-user-rate"><span>123</span>&nbsp;&nbsp;reviews</span>
          </div>
        </div>
      </div>
    </div>

    <div class="right-side">

      <div class="nav">
        <ul>
          <li onclick="tabs(0)" class="user-post active">Platforma</li>
      <li onclick="tabs(1)" class="user-review">Historik</li>
          <li onclick="tabs(2)" class="user-setting"> Settings</li>
        </ul>
      </div>
      <div class="profile-body">
        <div class="profile-posts tab">
          <h1>Platforma</h1>
          <p class="text-center"><?php
          echo  $platforma;
          ?>
         </p>
      </div>
      <div class="profile-reviews tab">
          <h1>Historik</h1>
          <p>Proin a vulputate odio. Fusce in elementum ipsum. Praesent at dignissim eros, vitae vehicula sapien. Maecenas ac sagittis ante. Aenean finibus massa lectus, et
             interdum nisl laoreet non. In a eros velit. Vestibulum bibendum sem vitae fringilla lacinia. Morbi eget elementum felis. Nulla id augue elit. Cras egestas euismod fermentum. Cras porttitor fringilla nisl, vitae rutrum ipsum tempor sed. Aliquam bibendum, turpis id accumsan mollis, enim ligula sodales est, eu commodo nulla leo quis nulla. Fusce vehicula quis nibh at sollicitudin. Donec accumsan facilisis malesuada. Praesent pharetra, mauris eu ultricies sodales, velit lacus sodales lacus, efficitur luctus enim ligula at nisl. Sed laoreet est dolor, sit amet gravida ex varius vel. </p>
        </div>
        <div class="profile-settings tab">
        <!--  <div class="account-setting">-->
            <h1>Acount Setting</h1>
<?php

$query = "SELECT * FROM tbluser WHERE    Firstname = '$Emri' ||  Lastname = '$Mbiemri' && Parti='$Partia' && Roli='Kandidate'  ;" ;
$result=mysqli_query($conn,$query);

 ?>

<div class="container">
  <div class="col m-auto-5">


                      <?php
                        while ($row=mysqli_fetch_assoc($result))
                      {

                      $ID= $row["ID"] ;
                      $Emri= $row["Firstname"] ;
                      $Mbiemri= $row["Lastname"] ;
                      $Emaili=$row["Email"];
                      $Karte = $row["KarteID"] ;
                      $Roli =$row["Roli"];
                      $mosha =$row["Mosha"];
                      $qyteti =$row["qyteti"];
                      $partia =$row["Parti"];
                      $NUIK=$row["NuiK"]

?>


<div class="row mx-md-n5">
  <div class="col px-md-5"><div class="p-3 text-left">
                         <p ><?php echo  "ID : ".$ID ?>&nbsp&nbsp&nbsp&nbsp</p>
                         <p><?php echo"Emri: "  .$Emri  ?>&nbsp&nbsp&nbsp&nbsp</p>
                         <p><?php echo "MBIEMRI: ".$Mbiemri  ?>&nbsp&nbsp&nbsp</p>
                         <p><?php echo "Mosha: ".$mosha  ?>&nbsp&nbsp&nbsp&nbsp</p>
                         <p><?php echo "ID KARTES: ".$Karte  ?>&nbsp</p>
                           <p><?php echo "NUIK: ".$NUIK  ?>&nbsp</p>

                       </div>
          </div>
<div class="col px-md-5"><div class="p-3 text-left">
                        <p><?php echo "ROLI: ".$Roli  ?>&nbsp</p>
                        <p><?php echo "MOSHA: ".$mosha  ?>&nbsp</p>
                        <p><?php echo "PARTIA: ".$partia  ?>&nbsp</p>
                        <p><?php echo "QYETETI: ".$qyteti  ?>&nbsp</p>
                        <p><?php echo "EMAIL: ".$Emaili  ?> &nbsp</p>

                      </div>
                    </div>
                  </div>
<div class="col  px-md-5">
  <button class="chatbtn" id="Edit" onclick="window.location.href = 'edit1.php?GetID=<?php echo $ID ?>';">  <i class="fa fa-edit"></i> Edit </button>

</div>
                      <?php
                    }
                      ?>

      </div>
    </div>
  </div>
</div>

<script src="main.js">

</script>
</body>
</html>
