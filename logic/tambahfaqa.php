<?php 

include '../core/koneksi.php';


$pertanyaan = $_POST['pertanyaan'];
$jawaban = $_POST['jawaban'];

$result = mysqli_query($conn, "INSERT INTO `faq` (`id`, `pertanyaan`, `jawaban`, `status`) VALUES (NULL, '$pertanyaan', '$jawaban', '0')");

if($result){
	header("Location: ../faqa.php");
}else{
	header("Location: ../tambahdata.php");
}

?>