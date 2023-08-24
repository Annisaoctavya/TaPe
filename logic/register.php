<?php 

include '../core/koneksi.php';


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$fullname = $firstname ." ".$lastname;
$no_tlp = $_POST['nohp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$password = $_POST['password'];

$result = mysqli_query($conn, "INSERT INTO `login` (`id`, `fullname`, `email_user`, `password`, `no_tlp`, `gender`, `image`) VALUES (NULL, '$fullname', '$email', '$password', '$no_tlp', '$jenis_kelamin',NULL)");

if($result){
	header("Location: ../masuk.php");
}else{
	header("Location: ../daftar.php");
}

?>