<?php
    $conn = mysqli_connect("localhost","root","","db_tape");
    if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	// echo "Connected successfully";
?>