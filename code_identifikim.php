<!--
Kodi per identifikimin
-->
<?php


$email = $password = $pwd = $id = $loginErr =  '';
$borderColor = '#407BFE';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('lidhjameDB.php');
    $id = $_POST['id'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $password = MD5($pwd);
}

if($email!=''&& $pwd!='')
{
    $query="select KarteID, Password,Email,Roli from tbluser where KarteID='".$id."' and Password='".$pwd."'  and Email='".$email."'";
    $result = $conn->query($query);
    if(!$result)
        die("Query Failed: " .  mysqli_error($conn));
    else{
        if($result->num_rows > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $borderColor = "#407BFE";
            echo "<script> 
                    localStorage.setItem('sigma','[\'KarteID\' => $row[KarteID], \'Email\' => $row[Email], \'Roli\'=>$row[Roli]');
                    window.location.replace('Llogaria.php');
                    </script>";
        }
        else
        {
            $loginErr= 'Keni vendosur ID ose fjalekalimin gabim...';
            $borderColor = "#cc1d2d";
        }
    }

}
?>

