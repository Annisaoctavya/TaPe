<?php 
include '../core/koneksi.php';


	$id=$_GET['id'];
	$query = "delete from tentang_kami where id=$id";
	$sQuery = mysqli_query($conn,$query);

	if($sQuery){
		header("Location: ../../tentang-kami-admin.php");
	}else{
		header("Location: ../../tentang-kami-admin.php");
	}	


 ?>