<?php
require_once ("lidhjameDB.php");
if(isset($_POST['Update']))
{

  $ID= $_GET["ID"] ;

  $Emaili=$_POST["email"];
  $Platforma=$_POST['platforma'];
  $Passwordi =$_POST["password"];


  $query= "UPDATE tbluser SET
    Email= '".$Emaili."' , Password='".$Passwordi."',Platforma='".$Platforma."'
    WHERE ID ='".$ID."' ";

 $result=mysqli_query($conn,$query);

   if($result)
   {

     echo '<script> alert("data updatet");</script>';

     header("location:FqPartive.php");

   }
   else {
     echo "Kontrollo te dhenat";
   }
   }
   else {
     header("location:edit1.php");
   }
   ?>
