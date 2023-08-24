<?php 

include 'koneksi.php';

$email = $_POST['email'];
$komentar = $_POST['komentar'];

$result = mysqli_query($koneksi,"INSERT INTO tentang_kami(email_user,komentar) values ('$email','$komentar')");
header("location:tentang-kami-view.php");

?>