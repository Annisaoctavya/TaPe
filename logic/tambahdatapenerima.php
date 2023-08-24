<?php 

include '../core/koneksi.php';


$nama_penerima = $_POST['penerima'];
$dusun = $_POST['dusun'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$barang = $_POST['barang'];
$jenjang = $_POST['jenjang'];

$result = mysqli_query($conn, "INSERT INTO `data_penerima` (`id`, `nama_penerima`, `dusun`, `desa`, `kecamatan`, `barang_donasi`, `jenjang`) VALUES (NULL, '$nama_penerima', '$dusun', '$desa', '$kecamatan', '$barang', '$jenjang')");

if($result){
	header("Location: ../Informasi Penerima.php");
}else{
	header("Location: ../tambahdatapenerima.php");
}

?>