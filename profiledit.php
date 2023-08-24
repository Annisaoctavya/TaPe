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
        <title>Profile Edit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
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
            <?php include 'layout/navbar.php'; ?>
            <div class="container" style="margin-top: 20px; margin-bottom: 20px;background-color: lightgrey;
                border: black; border-radius: 30px; padding-bottom: 20px;">
                <h3 style="padding-top: 30px; margin-top: 20px; margin-left: 39px;" >Profil saya</h3>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-8">
                            <form action="<?= base_url()?>logic/crud-user.php/?function=editDataProfil&id=<?= $_SESSION['id'] ?>" method="POST"  enctype="multipart/form-data">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-4"> <label for="" class="form-label">Nama</label></div>
                                        <div class="col-sm-8"> <input type="text" class="form-control" id="nama" value="<?= $rows['fullname']; ?>" name="nama" focus> </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-4"> <label for="" class="form-label">Email</label></div>
                                        <div class="col-sm-8"> <input type="text" class="form-control" id="email" value="<?= $rows['email_user']; ?>" name="email"> </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-4"> <label for="" class="form-label">Nomor Telepon</label></div>
                                        <div class="col-sm-8"> <input type="text" class="form-control" id="no_tlp" value="<?= $rows['no_tlp']; ?>" name="nohp"> </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-4"> <label for="" class="form-label">Jenis Kelamin</label></div>
                                        <div class="col-sm-8"> <input type="text" class="form-control" id="gender" value="<?= $rows['gender']; ?>" name="gender"> </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-4"> <label for="" class="form-label">Foto Profil</label></div>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="file" id="image" name="image" required> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <img style="height: 230px; width: 350px;" src="<?= base_url() ?>iconp.png" alt="">
                                </div>
                                <button style=" margin-top: 20px; border: none; border-radius: 20px; width: 200px; margin-left: 25px; margin-bottom: 20px;
                                background-color: #7fdcda;" class="btn btn-outline-dark" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!----------- Footer ------------>
                <footer class="footer-bs">
                    <div class="row">
                        <div class="col-md-3 footer-brand animated fadeInLeft">
                            <div class="footernya">
                                <img class="img-fluid" src="<?= base_url() ?>logo2.png" width="100" height="100" style="margin: left 10px;">
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
        <script type="text/javascript">
        window.onload = function() {
        document.getElementById("nama").focus();
        };
        </script>
    </html>
</body>
</html>