<?php 

include '../core/koneksi.php';


$email = $_POST['email'];
$comment = $_POST['komentar'];
$format = date('Y-m-d');

$result = mysqli_query($conn, "INSERT INTO `tentang_kami` (`id`, `tgl` ,`email_user`,`komentar`) VALUES (NULL, '$format', '$email', '$comment')");
if($result){
	header("Location: ../tentang-kami-view.php");
}else{
	header("Location: ../tentang-kami-view.php");
}

?>