<?php
include 'core/base_url.php';
include 'core/koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Donatur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="FAQA.css">
</head>
<body style="overflow-x: hidden;">
    <div class="row no-gutters ">
        <div class="col-md-2 pr-3 pt-4" style="background-color: #f8f9fa; height: 1100px;">
            <ul class="nav flex-column ml-3 mb-5"  style="position:fixed; margin-left: 30px; margin-top: -8px;">
                <li class="nav-item">
                  <img src="logo2.png" alt="" style="height: 60px; width: 60px; margin-left: 40px;">
                </li>
                <li class="nav-item">
                  <h3 style="color: #7fdbda;font-size: 18pt;"><b>Donasi TaPe</b></h3><hr class="bg-secondary" style="margin-top: 15px;">
                </li>
                <li class="nav-item active ">
                  <a class="nav-link active text-black" href="Tentang Kami Admin.php"><i class="fa fa-info-circle" aria-hidden="true"></i> Tentang Kami</a><hr class="bg-secondary"  style="margin-top: 15px;">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-black" href="Hubungi Kami Admin.php"><i class="far fa-comment"></i> Hubungi Kami</a><hr class="bg-secondary" style="margin-top: 15px;">
                </li>
                <li class="nav-item">
                <a class="nav-link text-black" href="FAQA.php" ><i class="fas fa-question-circle" aria-hidden="true"></i> FAQ</a><hr class="bg-secondary" style="margin-top: 15px;">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-black" href="Donatur.php"><i class="fas fa-users"></i> Donatur</a><hr class="bg-secondary" style="margin-top: 15px;">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-black" href="Informasi Penerima.php"><i class="fas fa-user-graduate"></i> Penerima</a><hr class="bg-secondary"style="margin-top: 15px;">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-black" href="Keuangan.php"><i class="fas fa-balance-scale"></i> Keuangan</a><hr class="bg-secondary"style="margin-top: 15px;">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-black" href="login admin.php"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Keluar"></i> Log Out</a>
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-2" style="margin-top :50px;">
            <div class="row text-dark">
                <h3>Donatur  | <b>Admin</b>
                </h3><hr>
                <div class="container" style="  text-align: center; margin-top: 15px;">
                    <div class="row justify-content-center">
                        <div class="col-sm-3 head">
                            <p>Email User</p>
                        </div>
                        <div class="col-sm-3 head">
                            <p>Nominal</p>
                        </div>
                        <div class="col-sm-3 head">
                            <p>Metode Pembayaran</p>
                        </div>
                        <div class="col-sm-3 head">
                            <p>Waktu</p>
                        </div>
                    </div>
                </div>
                <hr>
                <?php 
                $query = "select * from donasi";
                $sQuery = mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($sQuery)){
                 ?>
                <div class="container" style="text-align: center;">
                    <div class="row justify-content-center">
                        <div class="col-sm-3 isi">
                            <p><?= $row[1]; ?></p>
                        </div>
                        <div class="col-sm-3 isi">
                            <p><?= $row[2]; ?></p>
                        </div>
                        <div class="col-sm-3 isi">
                            <p><?= $row[3]; ?></p>
                        </div>
                        <div class="col-sm-3 isi">
                            <p><?= $row[5]; ?></p>
                        </div>
                    </div>
                </div> 
                <?php } ?>          
                <hr>
            </div>
        </div>
    </div>
</body>
</html>
            
