<?php 
include '../core/koneksi.php';


	$id=$_GET['id'];
	$query = "delete from data_penerima where id=$id";
	$sQuery = mysqli_query($conn,$query);

	if($sQuery){
		header("Location: ../Informasi Penerima.php");
	}else{
		header("Location: ../Informasi Penerima.php");


 ?>