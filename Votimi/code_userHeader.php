<?php
require_once('../lidhjameDB.php');

if(isset($_GET['id'])){
$parameter = $_GET['id'];
$sql_query="select * from tbluser where ID= '".$parameter."'";
$result=$conn->query($sql_query);
$row = $result->fetch_assoc();
$user = $row["Firstname"].' '.$row["Lastname"];
}
?>
