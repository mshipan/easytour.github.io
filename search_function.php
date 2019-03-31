<?php 
		function dbcon($server,$user,$pass,$database){
		$conn=mysqli_connect($server,$user,$pass,$database);
		if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
	}
 ?>