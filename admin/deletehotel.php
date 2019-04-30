<?php
	session_start();
	if ($_SESSION['user']!=1) {
		header('location:login.php');
	}
	require 'master/header.php';
	require'../vendor/autoload.php';
	include '../function.php';
	
	$id = $_GET['id'];
	
	$tours=HotelPackage::find($id);
	$tours->delete();
	echo '<script type="text/javascript">
			window.location = "allHotelPackage.php"
			</script>';

?>

