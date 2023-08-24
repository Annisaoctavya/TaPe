<?php 
include '../core/koneksi.php';


	$id=$_GET['id'];
	$query = "update faq set status=0 where id=$id";
	$sQuery = mysqli_query($conn,$query);

	if($sQuery){
		header("Location: ../../faqa.php");
	}else{
		header("Location: ../../faqa.php");
	}	


 ?>