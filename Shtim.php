<?php
require_once ("lidhjameDB.php");
if(isset($_POST['Shto']))
{

  $Karte = $_POST["Kid"] ;
  $Emri= $_POST["first"] ;
  $Mbiemri= $_POST["last"] ;
//  $mosha =$_POST["mosha"];
  $Emaili=$_POST["email"];
  //$NuiK=$_POST['Nuik'];
  //$partia=$_POST['partia'];
//  $qyteti=$_POST['qyteti'];
  $Passwordi =$_POST["pwd"];

  //$platforma=$_POST['platforma'];

  $sql ="INSERT INTO tbluser ( KarteID , Firstname , Lastname  , Email , Password ,Roli)
  VALUES ('$Karte','$Emri','$Mbiemri','$Emaili','$Passwordi','Admin')";

   $result=mysqli_query($conn,$sql);

if($result)
{
//  header("Location: anotherDirectory/anotherFile.php");
  header("location:Modifiko.php");
}
else {
  echo "Kontrollo te dhenat";
}
}
else {
  header("location:Modifiko.php");
}
?>
