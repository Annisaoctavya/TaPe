<?php 

include '../core/koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM login WHERE email_user = '$email' AND password = '$password'");

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	    		session_start();
    			$_SESSION['email'] = $email;
    			$_SESSION['fullname'] = $row['fullname'];
    			$_SESSION['id'] = $row['id'];
    			$_SESSION['img_profil'] = $row['image'];
	  }

	header("Location: ../profil.php/?function=getDataProfil&id=".$_SESSION['id']);
}
else{
	header("Location: ../masuk.php");
}

?>