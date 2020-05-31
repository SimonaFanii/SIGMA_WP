<?php
require_once ("lidhjameDB.php");
if(isset($_POST['Update']))

{



   if ($_POST['pass'] != $_POST['pass2']) {
   die('Konfirmo passwordin. ');
}
 $Passwordi =$_POST["pass"];
 $password = md5($Passwordi);

if(empty($_POST['pass'])) {
  $Passwordi =$_POST["password"];
  $password = md5($Passwordi);

}
  $ID= $_GET["ID"] ;
  $Emaili=$_POST["email"];
  $Platforma=$_POST['platforma'];

  $query= "UPDATE tbluser SET
    Email= '".$Emaili."' , Password='".$password."',platforma='".$Platforma."'
    WHERE ID ='".$ID."' ";
    $ID= $row["ID"] ;
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
