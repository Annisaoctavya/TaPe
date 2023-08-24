<?php 
	
	function koneksi(){
		$conn = mysqli_connect("localhost","root","","db_tape");
		return $conn;
	}

	$date = $_POST['filter-date'];

	$tmp = explode('-',$date);
	$rows = array();
	$result = mysqli_query(koneksi(), "SELECT SUM(donasi.nominal) AS nominal, donasi.waktu FROM `donasi` WHERE donasi.waktu LIKE '%-$tmp[1]-%'");
	while($row = $result->fetch_assoc()) {
		$rows[] = $row;
	}
	print json_encode($rows);
?>