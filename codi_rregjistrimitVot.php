<!--
kodi i regjistrimit te kandidateve
-->



<?php
require_once('lidhjameDB.php');
$queryQytet="select EmerQytet,IdQytet from qytete";
$resultQytet = mysqli_query($conn,$queryQytet);
$qyteti = 1;
if(isset($_POST['regjistrohu'])) {
    $qyteti = $_POST['qyteti'];
}

$iderr = $emrierr = $mbiemrierr = $moshaerr = $emailerr = $passworderr = $pwder = $password1err = $password1 = $qytetierr  = '';
$id = $emri = $mbiemri = $mosha = $email =$qyteti = $password = $pwd = $pwd1 = $password1 =$Nuiv=$Nui = $N = $NuiV ='';

if (isset($_POST['regjistrohu1'])) {
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('lidhjameDB.php');
    $emri = $_POST['emri'];
    $id = $_POST['id'];
    $mbiemri = $_POST['mbiemri'];
    $mosha = $_POST['mosha'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $pwd1 = $_POST['password1'];
    $qyteti=$_POST['qyteti'];


    $uppercase = preg_match('@[A-Z]@', $pwd);
    $lowercase = preg_match('@[a-z]@', $pwd);
    $number    = preg_match('@[0-9]@', $pwd);
    $specialChars = preg_match('@[^\w]@', $pwd);

    $queryNUIV="select * from votuesnui where votuesnui.NUIV='$id'";
    $resultNUIV = $conn->query($queryNUIV);
    $rowVotues = $resultNUIV->fetch_assoc();
    if($rowVotues){
    $id = $rowVotues['NUIV'];
    $NuiV =  $rowVotues['idV'];   
    }
}
$encryptedPassword = md5($pwd);

$query1="SELECT * FROM `votuesnui` WHERE `NUIV`='$id'";
$result1 = $conn->query($query1);
$row1 = $result1->fetch_assoc();



//$sql ="INSERT INTO tbluserv ( KarteID , Firstname , Lastname , Mosha , Email , Password) VALUES ('$id','$emri','$mbiemri','$mosha','$email','$pwd')";
$sql ="INSERT INTO tbluser ( KarteID , Firstname , Lastname , Mosha , Email , Password ,Roli,NuiV ,qyteti) VALUES ('$id','$emri','$mbiemri','$mosha','$email','$encryptedPassword','votues','$NuiV','$qyteti')";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['id'])) {
        $iderr = "Vendos id...";
    }
    elseif(!$row1){
        $iderr="Gabim! Kjo Id nuk ekziston, vendosni Id e sakte!";
    }

    elseif (strlen($_POST['id'])<=7) {
        $idErr = "ID shume e shkurter...";
    }
    elseif (strlen($_POST['id'])<=7) {
        $idErr = "ID shume e shkurter...";
    }
    elseif (!(preg_match('/^[A-Za-z][A-Za-z0-9_:\.-]*/', $id))) {
        $iderr= "Nuk eshte e vlefshme...!";
    }

    if (empty($_POST['emri'])) {
        $emrierr = "Vendos Emrin...";
    }
    elseif (strlen($_POST['emri'])<=2) {
        $emrierr = "Emri shume i shkurter";
    }
    if (empty($_POST['mbiemri'])) {
        $mbiemrierr = "Vendos Mbiemrin";
    }
    elseif (strlen($_POST['mbiemri'])<=2) {
        $mbiemrierr = "Mbiemri shume i shkurter...";
    }
    if (empty($_POST['mosha'])) {
        $moshaerr = "Vendos Moshen...";
    }
    elseif (($_POST['mosha'])<18) {
        $moshaerr = "Mosha nen 18 vjec, nuk pranohet!";
    }
    if (empty($_POST['email'])) {
        $emailerr = "Vendos emailin...";
    }
    elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $emailerr="Email i gabuar";
    }

    $pass = $_POST['password'];

    $uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number    = preg_match('@[0-9]@', $pass);
    $specialChars = preg_match('@[^\w]@', $pass);
    if(empty($pass)){
        $passworderr="Vendos fjalekalimin...!";
    }

    elseif(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8) {
        $passworderr = $pwd;
        $passworderr = "Fjalekalimi duhet te permbaje shkronja, numra dhe karaktere speciale...";
    }
    if(empty($_POST["password1"])){
        $password1err="Vendos fjalekalimin per te konfirmuar...!";
    }
    elseif ($_POST["password1"]!=$pwd){
        $password1err="Fjalkalimet nuk jane te njejte...";
    }
    if(!empty($id)){
        $rs=mysqli_query($conn,"select * from tbluser where KarteID='$id'");
        if (mysqli_num_rows($rs)>0)
        {
            $iderr = "Ky perdorues ekziston";
        }
    }
    if(isset($_POST['qyteti']) && $_POST['qyteti'] == '') { 
        $qytetierr="Zgjidh qytetin";
      } 

    if(empty($iderr) && empty($emrierr) && empty($mbiemrierr)&& empty($moshaerr) && empty($emailerr) && empty($passworderr) && empty($password1err)) {
        $result =mysqli_query($conn, $sql);
        echo    "<script>
    alert  ('Ju jeni rregjistruar si votues');
        </script>";
        // header("Location: Identifikimi.php");
        echo("<script>location.href = 'Identifikimi.php';</script>");
       
    }
}

?>