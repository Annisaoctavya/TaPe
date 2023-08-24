<?php
session_start();
if (!isset($_SESSION['email'])){
    $_SESSION['email'] = null;
}
include 'core/koneksi.php';
include 'core/base_url.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="FAQ.css">
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
                <a class="nav-link" href="dashboard.php">Beranda</a>
                <a class="nav-link" aria-hidden="true" href="tentang-kami-view.php">Tentang Kami</a>
                <a class="nav-link" href="hubungi-kami.php">Hubungi Kami</a>
                <a class="nav-link active" href="FAQ.php">FAQ</a>
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
<!----------- isi ------------>
    <div class="container">
        <h1>Frequently Ask Question</h1>
        <hr/>
        <?php  
            $query = "select * from faq where status=1";
            $sQuery = mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($sQuery)){
        ?>
        <div>
            <h4><?= $row[1]; ?></h4>
            <p><?= $row[2]; ?></p>
        </div>
        <?php } ?>
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
                        <img class="img-fluid" src="logo2.png" width="100" height="100" style="margin: left 10px;">
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
                        <li><a href="donasitape@gmail.com">Email</a></li>
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