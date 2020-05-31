<!--
kodi i regjistrimit te kandidateve
-->
<?php 
include_once('code_qyteti.php');
?>
<?php
include_once('lidhjameDB.php');
$queryQytet="select EmerQytet,IdQytet from qytete";
$resultQytet = mysqli_query($conn,$queryQytet);

$resultParti = mysqli_query($conn, "SELECT * FROM `patia` WHERE 1");

$iderr = $emrierr = $mbiemrierr = $moshaerr = $emailerr = $passworderr = $pwder = $password1err = $password1 =$partierr= $qytetierr='';
$id = $emri = $mbiemri = $mosha = $email = $qyteti = $password = $pwd = $pwd1 = $password1 =$NuiK = $Nu = $Nuii = $Nuik ='';
$parti= '';

if (isset($_POST['regjistrohu'])) {
    include_once('lidhjameDB.php');
    $emri = $_POST['emri'];
    $id = $_POST['id'];
    $mbiemri = $_POST['mbiemri'];
    $mosha = $_POST['mosha'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $pwd1 = $_POST['password1'];
    $qyteti=$_POST['qyteti'];
    $parti=!empty($_POST['part']) ? $_POST['part'] : '';

    $uppercase = preg_match('@[A-Z]@', $pwd);
    $lowercase = preg_match('@[a-z]@', $pwd);
    $number    = preg_match('@[0-9]@', $pwd);
    $specialChars = preg_match('@[^\w]@', $pwd);

    $encryptedPass = md5($pwd);
    $queryKandidatNUIK="select * from kandidatnui where kandidatnui.NUIK='$id'";
    $resultKandidatNUIK = $conn->query($queryKandidatNUIK);
    $rowKandidat = $resultKandidatNUIK->fetch_assoc();
    if($rowKandidat){
    $id = $rowKandidat['NUIK'];
    $NuiK =  $rowKandidat['idK'];   
    }
}

// $query1="SELECT * FROM `kandidatnui` WHERE `NUIK`='$id'";
// $result1 = $conn->query($query1);
// $row1 = $result1->fetch_assoc();
// while ($rowKandidat = mysqli_fetch_array($resultKandidatNUIK)) {
//     echo $rowKandidat;
//     echo $id = $rowKandidat['idK'];
//     echo $NuiK = $rowKandidat['NUIK'];
// }
// $Nu=$Nuii->fetch_all();
//  if(!is_array($Nu)){  
//    $NuiK=$Nu['idK'];
//  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['id'])) {
        $iderr = "Vendos id...";
    }
    elseif(!$rowKandidat){
        $iderr="Gabim! Kjo Id nuk ekziston, ju nuk jeni autorizuar per te qene kandidate.";
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
    
    if(!isset($_POST['part'])){
		$partierr="Zgjidh partine";
	}

   
    if(isset($_POST['qyteti']) && $_POST['qyteti'] == '') { 
        $qytetierr="Zgjidh qytetin";
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
        $rs=mysqli_query($conn,"select * from tbluser where KarteID='$id' ");
        if (mysqli_num_rows($rs)>0)
        {
            $iderr = "Ky perdorues ekziston";
        }
    }
    if(empty($iderr) && empty($emrierr) && empty($mbiemrierr)&& empty($moshaerr) && empty($emailerr) && empty($passworderr) && empty($password1err)) {
        $sql ="INSERT INTO tbluser ( KarteID , Firstname , Lastname , Mosha , Email , Password ,Roli,NuiK,Parti,qyteti)
         VALUES ('$id','$emri','$mbiemri','$mosha','$email','$encryptedPass','kandidat','$NuiK','$parti','$qyteti')";
        $result =$conn -> query($sql);
        if($result) {
            echo    "<script>
            alert  ('Ju jeni rregjistruar si kandidat');
                </script>";
        } else {
            echo "Something has gone wrong! ".mysqli_error($conn);
            //if it didn't, echo the error message
        }
        // header("Location: Identifikimi.php");
       
    }
}


?>