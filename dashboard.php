<?php 
session_start();
if (!isset($_SESSION['email'])){
$_SESSION['email'] = NULL;
}
include 'core/base_url.php';
include 'core/koneksi.php';
?>
<!DOCTYPE php>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
      crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css"></li>
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dashboard.css">
  <style>
  [data-letters]:before {
            content:attr(data-letters);
            display:inline-block;
            font-size:1.3em;
            width:2.5em;
            height:2.5em;
            line-height:2.5em;
            text-align:center;
            border-radius:50%;
            background:plum;
            vertical-align:middle;
            margin-right:1em;
            color:white;
            }
            .profil_img{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 10px;
            margin-top: 8px;
            height: 89px !important;
            font-size: 20px;
            }
            .profil_img img{
              margin-top: -15px;
              width: 55px !important;
              height: 55px !important;
            }
  </style>
    </head>
    <body>
    <?php 
if ($_SESSION['email'] != NULL || $_SESSION['email'] != ''){
   include 'layout/navbar.php';
}else{
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <img src="logo.png" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="dashboard.php">Beranda</a>
                <a class="nav-link" aria-hidden="true" href="tentang-kami-view.php">Tentang Kami</a>
                <a class="nav-link" href="hubungi-kami.php">Hubungi Kami</a>
                <a class="nav-link" href="FAQ.php">FAQ</a>
                <a class="nav-link" href="daftar.php" style="margin-left: 210px;">DAFTAR</a>
                <a class="nav-link" href="masuk.php">
                    <button class="btn btn-outline-success" type="submit" style="margin-left: 10px; font-size: 19px; margin-top: -10px; 
                    border-radius: 10px; background-color: #7fdcda; border: none;">MASUK</button>
                </a> 
            </div>
        </div>
        </div>
    </nav>
    <?php  } ?>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= base_url(); ?>c1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url(); ?>c2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url(); ?>c3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <p style="margin-top: 150px;">Langkah kecil yang dapat
              mewujudkan mimpi seseorang.
              <p style="font-size: 18px;">Ayo berdonasi sekarang!</p>
              
              <?php
                if ($_SESSION['email'] == NULL || $_SESSION['email'] == ''){
              ?>
              <a href="donasii.php">
                <button class="btn" style="margin-left: 192px;">DONASI</button>
              </a>
              <?php }else { ?>
              <a href="<?= base_url(); ?>donasii.php/?function=getDataProfil&id=<?= $_SESSION['id'] ?>">
                <button class="btn" style="margin-left: 192px;">DONASI</button>
              </a>   
             
              <?php } ?>
            </div>
            <div class="col-lg-8">
              <img src="<?= base_url(); ?>B1.png" alt="">
            </div>
          </div>
        </div>
        <div class="row no-gutters mt-5">
            <div class="col-md-12 p-5 pt-2">
                <h3>Penerima Bulan Mei 2021</h3><hr>            
            </div>
            <div class="container" style="  text-align: center; margin-top: -45px;">
                <div class="row justify-content-center">
                            <div class="col-sm-2 head">
                                <p>Nama Penerima</p>
                            </div>
                            <div class="col-sm-2 head">
                                <p>Dusun</p>
                            </div>
                            <div class="col-sm-2 head">
                                <p>Desa</p>
                            </div>
                            <div class="col-sm-2 head">
                                <p>Kecamatan</p>
                            </div>
                            <div class="col-sm-2 head">
                                <p>Barang Donasi</p>
                            </div>
                            <div class="col-sm-2 head">
                                <p>Jenjang</p>
                            </div>
                </div>
            </div>
                <hr>
                <?php 
                $query = "select * from data_penerima";
                $sQuery = mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($sQuery)){
                ?>
                <div class="container" style="text-align: center;">
                    <div class="row justify-content-center">
                        <div class="col-sm-2" style="text-align: justify;">
                            <p><?= $row[1]; ?></p>
                        </div>
                        <div class="col-sm-2"style="text-align: justify;">
                            <p><?= $row[2]; ?></p>
                        </div>
                        <div class="col-sm-2" >
                            <p><?= $row[3]; ?></p>
                        </div>
                        <div class="col-sm-2 ">
                            <p><?= $row[4]; ?></p>
                        </div>
                        <div class="col-sm-2 ">
                            <p><?= $row[5]; ?></p>
                        </div>
                        <div class="col-sm-2">
                            <p><?= $row[6]; ?></p>
                        </div>                        
                    </div>
                </div>
                <?php } ?>            
                <hr>
        </div>
        <!----------- Footer ------------>
        <footer class="footer-bs">
            <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <div class="footernya">
                        <img class="img-fluid" src="<?= base_url(); ?>logo2.png" width="100" height="100" style="margin: left 10px;">
                        <h2>Donasi TaPe </h2>
                        <p>Donasi TaPe adalah wadah online untuk mempertemukan relawan/donatur yang ingin menyumbangkan uang untuk diberikan kepada pelajar yang kurang mampu</p>
                    </div>
                </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Menu —</h4>
                    <div class="col-md-6">
                        <ul class="list">
                            <li><a href="<?= base_url()?>dashboard.php">Beranda</a></li>
                            <li><a href="<?= base_url()?>tentang-kami-view.php">Tentang Kami</a></li>
                            <li><a href="<?= base_url()?>hubungi-kami.php">Hubungi Kami</a></li>
                            <li><a href="<?= base_url()?>FAQ.php">FAQ</a></li>
                            <li>
                                <?php
                                    if ($_SESSION['email'] == NULL || $_SESSION['email'] == ''){
                                ?>
                                <a href="donasii.php">Donasi</a>
                                <?php }else { ?>
                                <a href="<?= base_url(); ?>donasii.php/?function=getDataProfil&id=<?= $_SESSION['id'] ?>">
                                    Donasi</a>                                   
                                <?php } ?>    
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 footer-social animated fadeInDown">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/donasi.tape">Facebook</a></li>
                        <li><a href="https://twitter.com/DonasiTape">Twitter</a></li>
                        <li><a href="https://www.instagram.com/donasi_tape/">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-ns animated fadeInRight">
                    <h4>Donasi TaPe</h4>
                    <div class="alamat">
                        <i class="fas fa-home me-3"></i> Jl. Majapahit No. 62 Mataram
                    <div class="tlp">
                        <i class="fas fa-phone me-3"></i> 
                        + 62 877 321 9940
                    </div>
                    <br>
                    <h6>
                        Ayo bantu para generasi muda bangsa!
                    </h6>
                </div>
            </div>
        </div>
    </footer>
</body>
</html> 