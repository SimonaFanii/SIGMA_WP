
<?php
require_once ("lidhjameDB.php");
if(isset($_POST['Shto']))
{
  $Karte = $_POST["Kid"] ;
  $Emri= $_POST["first"] ;
  $Mbiemri= $_POST["last"] ;
  $mosha =$_POST["mosha"];
  $Emaili=$_POST["email"];
  $Passwordi =$_POST["pwd"];
  //$Roli =$_POST["roli"];
  $NuiK=$_POST['Nuik'];
  $partia=$_POST['partia'];
  $qyteti=$_POST['qyteti'];
  //$platforma=$_POST['platforma'];

$sql ="INSERT INTO tbluser ( KarteID , Firstname , Lastname , Mosha , Email , Password ,Roli,NuiK,Parti,qyteti)
VALUES ('$Karte','$Emri','$Mbiemri','$mosha','$Emaili','$Passwordi','Kandidat','$NuiK','$partia','$qyteti')";

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
