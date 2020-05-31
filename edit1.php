<?php
require_once ("lidhjameDB.php");

$ID=$_GET['GetID'];
$query = "SELECT * FROM tbluser WHERE ID = '".$ID."' and Roli='Kandidate'  and ID='".$ID."' " ;
$result=mysqli_query($conn,$query);

  while ($row=mysqli_fetch_assoc($result)) {

    $ID= $row["ID"] ;
    $Emaili=$row["Email"];
    $platforma=$row["platforma"];
    $Passwordi=$row["Password"];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset "UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="stili.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <!--jquery popper-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  </head>

<!--  -->
<body class="bg-dark">    <div class="container ">
      <div class="row">
       <div class="col-lg-6 m-auto">
         <div class="card mt-5">
           <div class="card-title">
             <h3 class="bg-success text-white-center py-3">Modifiko te dhenat</h3>
          </div>
          <div class="card-body ">


    <form action="update1.php?ID= <?php echo $ID?>" method="POST" >
    <label for="email"> Emaili</label>
      <input type="text" name="email" class="form-control mb-2" placeholder="E-mail" value="<?php echo $Emaili?>">
      <label for="password"> Passwordi vjeter</label>
      <input type="text" name="password" class="form-control mb-2" placeholder="Passwordi" value="<?php echo $Passwordi?>">
      <label for="password"> Passwordi ri</label>
      <input type="password" name="pass" class="form-control mb-2" placeholder="Passwordi">
      <input type="password" name="pass2" class="form-control mb-2" placeholder="Paswwordi" >

      <label for="platforma">Platforma</label>
      <textarea rows="4" cols="50" name="platforma"  class="form-control mb-2" placeholder="Platforma"value="<?php echo $platforma?>"><?php echo $platforma?>
    </textarea>
   <button class="btn btn-primary" id="btn1"  name="Update">Update</button>
    </form>

         </div>
        </div>
       </div>
      </div>
     </div>
    </body>
</html>
