<?php 

include '../core/koneksi.php';

$email = $_POST['email'];
$question = $_POST['Question'];

$result = mysqli_query($conn, "INSERT INTO `hubungi_kami`(`id`, `email_user`, `isi_pesan`) VALUES (null, '$email', '$question')");

	header("Location: ../hubungi-kami.php");


?>