<?php
	session_start();
	if ($_SESSION['user']!=1) {
		header('location:login.php');
	}
	require 'master/header.php';
	require'../vendor/autoload.php';
	include '../function.php';
	
	$id = $_GET['id'];
	
	$tours=Booking::find($id);
	$tours->delete();
	echo '<script type="text/javascript">
			window.location = "all_booking.php"
			</script>';

	// if (isset($_POST['delete'])) {
	// 	if ($_SERVER["REQUEST_METHOD"]=="POST") {
	// 	$tours=TourPackage::find($id);
	// 	$tours->delete();
	// 	echo '<script type="text/javascript">
	// 		window.location = "allTourPackage.php"
	// 		</script>';
	// 		}
	// 	}	

?>

