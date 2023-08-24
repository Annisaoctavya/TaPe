<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Akun</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
            <link rel="stylesheet" href="daftar.css">
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <img src="logo.png" alt="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="dashboard.php">Beranda</a>
                            <a class="nav-link" href="tentang-kami-view.php">Tentang Kami</a>
                            <a class="nav-link" href="hubungi-kami.php">Hubungi Kami</a>
                            <a class="nav-link" href="FAQ.php">FAQ</a>
                            <a class="nav-link active" aria-current="page" href="daftar.html" style="margin-left: 210px;">DAFTAR</a>
                            <a class="nav-link" href="masuk.php">
                                <button class="btn btn-outline-success" type="submit" style="margin-left: 10px; font-size: 19px; margin-top: -10px;
                                border-radius: 10px; background-color: #7fdcda; border: none;">MASUK</button>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <!----------- isi ------------>
            <div class="form">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <img class="img" src="daftar.png">
                        </div>
                        <div class="col-lg-8">
                            <div class="form-log">
                                <div class="masuk">
                                    <h2>Pendaftaran Akun</h2>
                                </div>
                                <form action="logic/register.php" method="POST" class="was-validated">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="txt">Nama Depan</label>
                                                <input type="text" class="form-control" id="txt" placeholder="Nama Depan" name="firstname" required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Silahkan isi bagian ini..</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="txt">Nama Belakang</label>
                                                <input type="text" class="form-control" id="txt" placeholder="Nama Belakang" name="lastname" required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Silahkan isi bagian ini..</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Silahkan isi bagian ini.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tlp">Nomor Telepon</label>
                                        <input type="tel" class="form-control" id="angka" placeholder="Masukkan Nomor Telepon" name="nohp" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Silahkan isi bagian ini.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label> <br>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="jenis_kelamin" value="L" id="jenis_kelamin" required>Laki-Laki
                                            <input type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin" required>Perempuan
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Silahkan isi bagian ini.</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="pwd">Kata Sandi*</label>
                                                <input type="password" class="form-control" id="pwd" placeholder="Masukkan Kata Sandi" name="password" required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Silahkan isi bagian ini.</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="pwd">Konfirmasi Kata Sandi</label>
                                                <input type="password" class="form-control" id="pwd" placeholder="Konfirmasi Kata Sandi" name="pswd" required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Silahkan isi bagian ini.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="remember" required> Saya setuju dengan kebijakan.
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Silahkan centang kotak ini.</div>
                                        </label>
                                    </div>
                                    <button style=" margin-top: 20px; border: none; border-radius: 20px; width: 460px; margin-left: -80px; margin-bottom: 20px;
                                    background-color: #7fdcda;" class="btn btn-outline-dark" type="submit">Daftar</button>
                                </form>
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
                            <img class="img-fluid" src="logo2.png" width="100" height="100" style="margin: left 10px;">
                            <h2>Donasi TaPe </h2>
                            <p>Donasi TaPe adalah wadah online untuk mempertemukan relawan/donatur yang ingin menyumbangkan uang untuk diberikan kepada pelajar yang kurang mampu</p>
                        </div>
                    </div>
                    <div class="col-md-4 footer-nav animated fadeInUp">
                        <h4>Menu —</h4>
                        <div class="col-md-6">
                            <ul class="list">
                                <li><a href="dashboard.html">Beranda</a></li>
                                <li><a href="tentang-kami-view.html">Tentang Kami</a></li>
                                <li><a href="hubungi-kami.html">Hubungi Kami</a></li>
                                <li><a href="FAQ.html">FAQ</a></li>
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