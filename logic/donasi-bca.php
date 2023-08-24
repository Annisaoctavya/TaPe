<?php 

include '../koneksi.php';

$jlh_donasi = $_POST['totaldonasi'];
$tmp = explode("Rp.", $jlh_donasi);
// $getid = $_GET['id']; 
// $email = $_GET['email'];
$getId = $_POST['id'];
// var_dump($email);
// var_dump($getid);
$queryS = "select email_user from login where id=$getId";
$resultS = mysqli_query($koneksi,$queryS);
$resEmail = mysqli_fetch_array($resultS);
// var_dump($getId);
// var_dump($resEmail);
// die();
// ambil data file
$namaFile = $_FILES['fileToUpload']['name'];
$namaSementara = $_FILES['fileToUpload']['tmp_name'];
$date = date('Y-m-d H:i:s');
$rand=rand(10000,99999);
$encname=$date.$rand;
$expbanner=explode('.',$namaFile);

$bannerexptype=$expbanner[1];
// tentukan lokasi file akan dipindahkan
$dirUpload = $_SERVER['DOCUMENT_ROOT'] . '/tape/aset/uploads/';
$final_name =  $dirUpload.md5($encname).'.'.$bannerexptype;
// pindahkan file
$terupload = move_uploaded_file($namaSementara,$final_name);

if ($terupload) {
    $query = mysqli_query($koneksi,"INSERT INTO `donasi` (`id`,`email_user`, `nominal`, `metode_pembayar`, `bukti_transfer`, `waktu`) VALUES (null,'$resEmail[0]', '$tmp[1]', 'bca', '$final_name', '$date')");
    if ($query){
        $var = $_SERVER['DOCUMENT_ROOT'].'/tape/';
        $status = array('message' => 'sukses');
        $encode = json_encode($status,true);
        $mess = json_decode($encode)->message;
        header("location: http://localhost/tape/donasi-pemberitahuan.php/?function=getDataProfil&id=$getid&nominal=&payment-method=bca");
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
} else {
    echo "Upload Gagal!";
}

?>