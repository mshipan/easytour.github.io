<?php 
session_start();
// session_destroy();
$_SESSION['active']=false;
header("location:index.php");
 ?>