<?php

$id = $_GET['id'];

function koneksi(){
	$conn = mysqli_connect("localhost","root","","db_tape");
	return $conn;
}
	
function getDataProfil($id){
	$result = mysqli_query(koneksi(), "SELECT * FROM `login` WHERE `id` LIKE '$id'");
	while($row = $result->fetch_assoc()) {
		return $row;
	}
	
}

function editDataProfil($id){

	$email_user = $_POST['email'];
	$fullname = $_POST['nama'];
	$no_tlp = $_POST['nohp'];
	$gender = $_POST['gender'];
	
	if($_FILES['image']['name'] != '' || $_FILES['image'] != NULL){
		$image = uploadImageProfil($_FILES['image']);
		
		$query = mysqli_query(koneksi(),"UPDATE `login` SET `fullname` = '$fullname',`email_user` = '$email_user',`no_tlp` = '$no_tlp',`gender` = '$gender',`image` = '$image' WHERE `login`.`id` = $id;");
		if($query){
			session_start();
	    			$_SESSION['fullname'] = $fullname;
	    			$_SESSION['img_profil'] = $image;
			header("Location: ../../profil.php/?function=getDataProfil&id=".$id);
		}
		else{
			header("Location: ../masuk.php");
		}
	}else{
		$image = NULL;
		
		$query = mysqli_query(koneksi(),"UPDATE `login` SET `fullname` = '$fullname',`email_user` = '$email_user',`no_tlp` = '$no_tlp',`gender` = '$gender',`image` = '$image' WHERE `login`.`id` = $id;");
		if($query){
			session_start();
	    			$_SESSION['fullname'] = $fullname;
	    			$_SESSION['img_profil'] = NULL;
			header("Location: ../../profil.php/?function=getDataProfil&id=".$id);
		}
		else{
			header("Location: ../masuk.php");
		}

	};	
	
}

function uploadImageProfil($files){
	// ambil data file
	$namaFile = $files['name'];
	$namaSementara = $files['tmp_name'];
	$date = date('Y-m-d H:i:s');
	$rand=rand(10000,99999);
	$encname=$date.$rand;
	$expbanner=explode('.',$namaFile);

	$bannerexptype=$expbanner[1];
	// tentukan lokasi file akan dipindahkan
	$dirUpload = $_SERVER['DOCUMENT_ROOT'] . '/tape/aset/profil/';
	$final_name =  md5($encname).'.'.$bannerexptype;
	// pindahkan file
	$terupload = move_uploaded_file($namaSementara,$dirUpload.$final_name);
	return $final_name;
}
switch($_GET['function']) {
case 'getDataProfil':
    getDataProfil($id);
    break;
case 'editDataProfil':
    editDataProfil($id);
    break;
default:
    echo 'hmm function tidak ditemukan :(';
}


?>