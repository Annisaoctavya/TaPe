
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
    <title>FAQ</title>
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
        <div class="col-md-10 p-5 pt-2" style="margin-top: 50px;">
            <div class="row text-dark">
                <h3>Frequently Ask Questions  | <b>Admin</b>
                </h3><hr>

                <div class="container" style="  text-align: center; margin-top: 15px;">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 head">
                            <p>Pertanyaan</p>
                        </div>
                        <div class="col-sm-4 head">
                            <p>Jawaban</p>
                        </div>
                        <div class="col-sm-4 head">
                            <p>Action</p>
                        </div>
                    </div>
                </div>
                <hr>
                <?php 
                $query = "select * from faq";
                $sQuery = mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($sQuery)){
                 ?>
                <div class="container" style="text-align: center;">
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <p><?= $row[1]; ?></p>
                        </div>
                        <div class="col-sm-4">
                            <p><?= $row[2]; ?></p>
                        </div>
                        <div class="col-sm-4" style="align-items: center;">
                            <?php 
                                $statusQ = "select status from faq where id=".$row[0]." and status=1";
                                $resultS = mysqli_query($conn,$statusQ);
                                $res = mysqli_fetch_array($resultS);
                                if($res){
                            ?>
                            <a style="border: none; color: inherit;"
                            href="<?= base_url(); ?>logic/updatefaqback.php/?id=<?= $row[0]; ?>" >
                                <i class="far fa-hand-point-left"></i>                    
                            </a>
                            <?php } ?>
                            <a style="border: none; color: inherit;"
                            href="<?= base_url(); ?>logic/updatefaq.php/?id=<?= $row[0]; ?>" >
                                <img style="height: 20px; width: 20px;" src="refresh-button.png" alt="">
                            </a> 
                            <a style="border: none; color: inherit;"
                            href="<?= base_url(); ?>logic/hapusfaq.php/?id=<?= $row[0]; ?>" >
                                <img style="height: 20px; width: 20px;" src="delete.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?><!-- 
                <div class="container" style="text-align: center;">
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <p>Bagaimana langkah-langkah untuk berdonasi?</p>
                        </div>
                        <div class="col-sm-4">
                            <ol>
                                <li>Kunjungi halaman beranda website Donasi TaPe</li>
                                <li>Klik tombol Donasi Sekarang</li>
                                <li>Masukkan jumlah nominal uang yang ingin didonasikan</li>
                                <li>Pilih metode pengiriman uang donasi</li>
                                <li>Klik tombol Donasi</li>
                            </ol>
                        </div>
                        <div class="col-sm-4" style="align-items: center;">
                            <button style="border: none; background-color: inherit;">
                                <img style="height: 20px; width: 20px;" src="refresh-button.png" alt="">
                            </button> <button style="border: none; background-color: inherit;">
                            <img style="height: 20px; width: 20px;" src="delete.png" alt="">
                        </button>
                        </div>
                    </div>
                </div>
                <div class="container" style="text-align: center;">
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <p>Berapa jumlah minimum donasi?</p>
                        </div>
                        <div class="col-sm-4">
                            <p>Jumlah uang minimum yang bisa didonasikan sebesar Rp. 10.000,-</p>
                        </div>
                        <div class="col-sm-4" style="align-items: center;">
                            <button style="border: none; background-color: inherit;">
                                <img style="height: 20px; width: 20px;" src="refresh-button.png" alt="">
                            </button> <button style="border: none; background-color: inherit;">
                            <img style="height: 20px; width: 20px;" src="delete.png" alt="">
                        </button>
                        </div>
                    </div>
                </div>
                <div class="container" style="text-align: center;">
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <p>Bagaimana metode pembayaran donasi?</p>
                        </div>
                        <div class="col-sm-4">
                            <p>Metode pembayaran bisa dilakukan via transfer bank, virtual account, indomart, alfamart, gopay dan ovo</p>
                        </div>
                        <div class="col-sm-4" style="align-items: center;">
                            <button style="border: none; background-color: inherit;">
                                <img style="height: 20px; width: 20px;" src="refresh-button.png" alt="">
                            </button> <button style="border: none; background-color: inherit;">
                            <img style="height: 20px; width: 20px;" src="delete.png" alt="">
                        </button>
                        </div>
                    </div>
                </div>
                <div class="container" style="text-align: center;">
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <p>Siapa saja penerima manfaat dari Donasi TaPe?</p>
                        </div>
                        <div class="col-sm-4">
                            <p>Yang menerima donasi adalah para pelajar jenjang SD, SMP dan SMA yang berstatus kurang mampu</p>
                        </div>
                        <div class="col-sm-4" style="align-items: center;">
                            <button style="border: none; background-color: inherit;">
                                <img style="height: 20px; width: 20px;" src="refresh-button.png" alt="">
                            </button> <button style="border: none; background-color: inherit;">
                            <img style="height: 20px; width: 20px;" src="delete.png" alt="">
                        </button>
                        </div>
                    </div>
                </div>
                <div class="container" style="text-align: center;">
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <p>Bagaimana teknis penyaluran bantuan Donasi TaPe?</p>
                        </div>
                        <div class="col-sm-4">
                            <p>Teknis penyaluran dilakukan berdasarkan peta persebaran keluarga yang berstatus kurang mampu dengan data yang didapat dari pemerintah</p>
                        </div>
                        <div class="col-sm-4" style="align-items: center;">
                            <button style="border: none; background-color: inherit;">
                                <img style="height: 20px; width: 20px;" src="refresh-button.png" alt="">
                            </button> <button style="border: none; background-color: inherit;">
                            <img style="height: 20px; width: 20px;" src="delete.png" alt="">
                        </button>
                        </div>
                    </div>
                </div> -->
                <hr>
                <a href="tambahdata.php">
                    <button style=" margin-top: 20px; border: none; border-radius: 20px; width: 200px; margin-left: 790px; margin-bottom: 20px;
                            background-color: #7fdcda;" class="btn btn-outline-dark" type="submit">Tambah</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>

