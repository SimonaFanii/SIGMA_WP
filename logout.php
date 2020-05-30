<!--
Into this file, we write a code for logout.
-->
<?php
session_start();
session_destroy();
echo "<script type='text/javascript'>
window.localStorage.removeItem('sigma');
window.location.replace('index.php');
</script>";
// header("Location: index.php");
?>