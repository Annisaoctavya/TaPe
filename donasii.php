<?php
session_start();
if (!isset($_SESSION['email'])){
header("Location: masuk.php");
}
include 'core/base_url.php';
include 'logic/crud-user.php';
$rows = getDataProfil($_SESSION['id']);
?>
<!DOCTYPE php>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
            <link rel="stylesheet" href="<?= base_url() ?>donasii.css">
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
                <div class="row justify-content-center">
                    <div class="col-sm-7">
                        <div class="btn-group" style="margin-bottom: 250px;">
                            <button class="btn btn-secondary btn-lg" type="button" style="background-color: inherit; border: none;">
                            <img src="<?= base_url() ?>sd.png" alt="">
                            </button>
                            <button type="button" class="btn btn-lg btn-secondary
                            dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"
                            style="background-color: inherit; border: none;">
                            <span> <img src="<?= base_url() ?>down.png" alt="" style="width: 30px; height: 30px;" > </span>
                            </button>
                            <ul class="dropdown-menu">
                                <table>
                                    <th>
                                        Kriteria Handphone untuk pelajar SD :
                                    </th>
                                    <tr>
                                        <td>
                                            Min baterai 3500 mAh
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min RAM 2 GB
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min ROM 8 GB
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min kamera depan 5 MP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min kamera belakang 8 MP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min layar 5 inchi
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Kuota 5 GB
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                        </div>
                        <div class="btn-group" style="margin-bottom: 250px;">
                            <button class="btn btn-secondary btn-lg" type="button" style="background-color: inherit; border: none;">
                            <img src="<?= base_url() ?>smp.png" alt="">
                            </button>
                            <button type="button" class="btn btn-lg btn-secondary
                            dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"
                            style="background-color: inherit; border: none;">
                            <span> <img src="<?= base_url() ?>down.png" alt="" style="width: 30px; height: 30px;" > </span>
                            </button>
                            <ul class="dropdown-menu">
                                <table>
                                    <th>
                                        Kriteria Handphone untuk pelajar SMP :
                                    </th>
                                    <tr>
                                        <td>
                                            Min baterai 4000 mAh
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min RAM 2 GB
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min ROM 16 GB
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min kamera depan 5 MP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min kamera belakang 12 MP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min layar 5,5 inchi
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Kuota 10 GB
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                        </div>
                        <div class="btn-group" style="margin-bottom: 250px;">
                            <button class="btn btn-secondary btn-lg" type="button" style="background-color: inherit; border: none;">
                            <img src="<?= base_url() ?>sma.png" alt="">
                            </button>
                            <button type="button" class="btn btn-lg btn-secondary
                            dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"
                            style="background-color: inherit; border: none;">
                            <span> <img src="<?= base_url() ?>down.png" alt="" style="width: 30px; height: 30px;" > </span>
                            </button>
                            <ul class="dropdown-menu">
                                <table>
                                    <th>
                                        Kriteria Handphone untuk pelajar SMA :
                                    </th>
                                    <tr>
                                        <td>
                                            Min baterai 4500 mAh
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min RAM 2 GB
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min ROM 32 GB
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min kamera depan 12 MP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min kamera belakang 16 MP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Min layar 6 inchi
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Kuota 15 GB
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5" style="float: left;">
                        <div class="container" style="background-color: lightgray; border-radius: 20px; height: 280px;">
                            <div class="form-log2">
                                <div class="masuk">
                                    <h2>Pembayaran Donasi</h2>
                                </div>
                                <form id="donasi-form">
                                    <div div class="form-group">
                                        <label for="Jumlah Nominal">Jumlah Nominal</label>
                                        <input type="Jumlah Nominal" class="form-control" id="Jumlah Nominal" placeholder="Minimal Donasi Rp.10.000" name="jlh_nominal" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="metode">Metode Pembayaran :</label>
                                        <select class="form-select" name="payment-method">
                                            <option selected>Pilih Metode Pembayaran</option>
                                            <option value="bca">Transfer Bank BCA</option>
                                            <option value="gopay">GO-PAY</option>
                                            <option value="ovo">OVO</option>
                                        </select>
                                    </div>
                                    <br/>
                                    
                                    <a href="" style=" margin-top: 20px; border: none; border-radius: 20px; width: 150px; margin-left: 125px; margin-bottom: 20px; margin-top: 0px;
                                        background-color: #7fdcda;" class="btn btn-outline-dark btn-donasi">Donasi
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script type="text/javascript">
    var serializedData;
    $('.btn-donasi').click(function(e){
            e.preventDefault();

            var $form = $(this).parents('form');
            var $inputs = $form.find("input,select,button");
            serializedData = $form.serializeArray();
            <?php if($_SESSION['email'] == NULL || $_SESSION['email'] == ''){ ?>
                $(location).attr('href', '<?= base_url(); ?>masuk.php');
            <?php }else{ ?>
                if(serializedData[1].value === 'ovo'){
                    $(location).attr('href', '<?= base_url(); ?>donasi-pembayaran-ovo.php/?function=getDataProfil&id=<?= $_SESSION['id'] ?>'+'&nominal='+serializedData[0].value+'&payment-method='+serializedData[1].value);
                }else if(serializedData[1].value === 'gopay'){
                    $(location).attr('href', '<?= base_url(); ?>donasi-pembayaran-gopay.php/?function=getDataProfil&id=<?= $_SESSION['id'] ?>'+'&nominal='+serializedData[0].value+'&payment-method='+serializedData[1].value);
                }else if(serializedData[1].value === 'bca'){
                    $(location).attr('href', '<?= base_url(); ?>donasi-pembayaran-bca.php/?function=getDataProfil&id=<?= $_SESSION['id'] ?>'+'&nominal='+serializedData[0].value+'&payment-method='+serializedData[1].value);
                }
            <?php } ?>      
    });

    </script>
</body>
</html>