<!--
kodi i regjistrimit te kandidateve
-->
<?php


$iderr = $emrierr = $mbiemrierr = $moshaerr = $emailerr = $passworderr = $pwder = $password1err = $password1  = '';
$id = $emri = $mbiemri = $mosha = $email = $password = $pwd = $pwd1 = $password1  = '';


if (isset($_POST['regjistrohu'])) {
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('lidhjameDB.php');
    $emri = $_POST['emri'];
    $id = $_POST['id'];
    $mbiemri = $_POST['mbiemri'];
    $mosha = $_POST['mosha'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $pwd1 = $_POST['password1'];



    $uppercase = preg_match('@[A-Z]@', $pwd);
    $lowercase = preg_match('@[a-z]@', $pwd);
    $number    = preg_match('@[0-9]@', $pwd);
    $specialChars = preg_match('@[^\w]@', $pwd);
}

$sql ="INSERT INTO tbluserv ( KarteID , Firstname , Lastname , Mosha , Email , Password) VALUES ('$id','$emri','$mbiemri','$mosha','$email','$pwd')";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['id'])) {
        $iderr = "Vendos id...";
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
        $rs=mysqli_query($conn,"select * from tbluserv where KarteID='$id' ");
        if (mysqli_num_rows($rs)>0)
        {
            $iderr = "Ky perdorues ekziston";
        }
    }
    if(empty($iderr) && empty($emrierr) && empty($mbiemrierr)&& empty($moshaerr) && empty($emailerr) && empty($passworderr) && empty($password1err)) {
        $result =mysqli_query($conn, $sql);
        echo    "<script>
    alert  ('Ju jeni rregjistruar si votues tani do te votoni');
        </script>";
    }
}
