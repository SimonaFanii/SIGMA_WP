<?php
require_once('../lidhjameDB.php');

$parameter = $_GET['id'];
$query="select t.ID, q.EmerQytet, t.qyteti from tbluser t join qytete q on t.qyteti=q.IdQytet where ID='".$parameter."'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$qyteti = $row["EmerQytet"];
$idQyteti = $row["qyteti"];
$error='';
$resultKandidat = mysqli_query($conn, "select tbluser.Firstname, tbluser.Lastname, tbluser.ID from tbluser where qyteti='".$idQyteti."' and Roli=\"kandidat\"");

if (isset($_POST['submit'])) {
    if(isset($_POST['radio']))
    {
        $rad=$_POST['radio'];
        $sql="INSERT INTO votim ( vKandidateId , vVotuesId ) VALUES ('$rad','$parameter')";
        $resultVotimi =$conn->query($sql);
    // echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
    }
    else
    $error="zgjidh nje kandidat";
}


$kaVotuar = mysqli_query($conn, "select * from votim where vVotuesId ='".$parameter."'");
if($kaVotuar->num_rows > 0)
{echo $kavotuar=true;
header("Location: VotimiPerfundoj.php?id=$parameter");
}
else
echo $kavotuar=false;



?>







