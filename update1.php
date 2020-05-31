<?php
require_once ("lidhjameDB.php");
if(isset($_POST['Update']))
{
   if ($_POST['pass'] != $_POST['pass2']) {
   die('Your passwords did not match. ');
}
  // here we encrypt the password and add slashes if needed
  $Passwordi =$_POST["pass"];


  $ID= $_GET["ID"] ;

  $Emaili=$_POST["email"];
  $Platforma=$_POST['platforma'];


  $query= "UPDATE tbluser SET
    Email= '".$Emaili."' , Password='".$Passwordi."',platforma='".$Platforma."'
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
