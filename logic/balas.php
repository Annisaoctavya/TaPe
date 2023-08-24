<?php 

include '../core/koneksi.php';


$email = $_POST['email'];
$balasan = $_POST['balasan'];


$result = mysqli_query($conn, "INSERT INTO `balas` (`id` ,`email_user`,`balasan`) VALUES (NULL,'$email', '$balasan')");
if($result){
	header("Location: ../Hubungi Kami Admin.php");
}else{
	header("Location: ../Hubungi Kami Admin.php");
}

?>