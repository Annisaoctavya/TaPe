<?php 

include '../core/koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM login_admin WHERE email_user = '$email' AND password = '$password'");

if ($result->num_rows > 0) {
	// while($row = $result->fetch_assoc()) {
 //    	location();
 //  	}
	header("Location: ../tentang-kami-admin.php");
}else{
	echo "*Maaf Email dan Password yang Anda Masukkan Salah";
	header("Location: ../login-admin.php");
}

?>