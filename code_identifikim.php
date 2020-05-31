<!--
Kodi per identifikimin
-->
<?php


$email = $password = $pwd = $id  = $loginErr =  '';
$borderColor = '#407BFE';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('lidhjameDB.php');
    $id = $_POST['id'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $pasww=md5($pwd);
    $password = MD5($pwd);
}

if($email!=''&& $pwd!='')
{
    $query="select t.ID, t.KarteID, t.Password,t.Email,t.Roli,q.EmerQytet from tbluser t join qytete q on t.qyteti=q.IdQytet where KarteID='".$id."' and Password='".$pasww."'  and Email='".$email."'";
    $result = $conn->query($query);
    if(!$result)
        die("Query Failed: " .  mysqli_error($conn));
    else{
        if($result->num_rows > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $user = json_encode($row);
            $borderColor = "#407BFE";
            echo "<script  type='text/javascript'> 
            var user =  $user;
            localStorage.setItem('sigma',$row[ID]);
            console.log(user)
            if($user.Roli == 'votues')
                {
                    window.location.replace('Votimi/votimi.php?id=$row[ID]')
                }
                else if($user.Roli == 'kandidat'){
                    window.location.replace('Llogaria.php')
                }
                else if($user.Roli == 'admin'){
                    window.location.replace('Modifiko.php')
                }
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

