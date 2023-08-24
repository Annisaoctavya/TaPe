<?php
session_start();
if (!isset($_SESSION['email'])){
header("Location: masuk.php");
}
include 'core/base_url.php';
include 'logic/crud-user.php';
$rows = getDataProfil($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran BCA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>dashboard.css">
    <link rel="stylesheet" href="<?= base_url() ?>profile.css">
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
            margin-left: 15px;
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
            if ($_SESSION['email'] == NULL || $_SESSION['email'] == ''){
            ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <img src="<?= base_url() ?>logo.png" alt="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="dashboard.php" style="margin-top: 30px;">Beranda</a>
                            <a class="nav-link" href="tentang-kami-view.php" style="margin-top: 30px;">Tentang Kami</a>
                            <a class="nav-link" href="hubungi-kami.php" style="margin-top: 30px;">Hubungi Kami</a>
                            <a class="nav-link" href="FAQ.php" style="margin-top: 30px;">FAQ</a>
                            <p style="margin-left: 200px; margin-top: 39px; font-size: 20px;">Putri Utami</p>
                            <a class="nav-link" href="profil.php" ><img src="<?= base_url() ?>rounded.png"
                            alt="" style="height: 100px; width: 100px;"></a>
                        </div>
                    </div>
                </div>
            </nav>
            <?php }else { ?>
            <?php include 'layout/navbar.php'; ?>
            <?php } ?>
<!----------- isi ------------>
<div class="container">
    <div class="container"style="padding: 30px; background-color: white;margin-top: 20px;width: 700px; height: 130px;border-radius: 30px;border:1px solid black;font-size: 17px; display : flex; justify-content:center; align-items:center;">
    <h3>Terima kasih, Anda telah melakukan donasi. </h3>
    </div>
    <div class="container">
    <?php
        if ($_SESSION['email'] == NULL || $_SESSION['email'] == ''){
        ?>
            <a href="dashboard.php">
                <button style=" margin-top: 20px; border: none; border-radius: 20px; width: 200px; margin-left: 435px; margin-bottom: 20px; margin-top: 15px;
                    background-color: #7fdcda;" class="btn btn-outline-dark" type="submit">Kembali Ke Beranda</button>
            </a>
        <?php }else { ?>
            <a href="<?= base_url(); ?>dashboard.php/?function=getDataProfil&id=<?= $_SESSION['id'] ?>">
            <button style=" margin-top: 20px; border: none; border-radius: 20px; width: 200px; margin-left: 435px; margin-bottom: 20px; margin-top: 15px;
        background-color: #7fdcda;" class="btn btn-outline-dark" type="submit">Kembali Ke Beranda</button>
        </a>            
        <?php } ?>        
    </div>
</div>
<!----------- isi ------------>
        <section style="height:80px;"></section>
        <div class="row" style="text-align:center;">
        </div>
          <!----------- Footer ------------>
          <footer class="footer-bs">
              <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <div class="footernya">
                        <img class="img-fluid" src="<?= base_url()?>logo2.png" width="100" height="100" style="margin: left 10px;">
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
                </p>
            </div>
        </div>
    </footer>
</body>
</html> 