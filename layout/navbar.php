<?php
include 'core/base_url.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <img class="brand-logo" src="<?= base_url() ?>logo.png" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="<?= base_url()?>dashboard.php" style="margin-top: 30px;">Beranda</a>
                <a class="nav-link" href="<?= base_url()?>tentang-kami-view.php" style="margin-top: 30px;">Tentang Kami</a>
                <a class="nav-link" href="<?= base_url()?>hubungi-kami.php" style="margin-top: 30px;">Hubungi Kami</a>
                <a class="nav-link" href="<?= base_url()?>FAQ.php" style="margin-top: 30px;margin-right:200px">FAQ</a>
                <?php
                $tmp = $_SESSION['fullname'];
                $exp = explode(' ',$tmp);
                $f_char = strtoupper(substr($exp[0],0,1));
                $l_char = strtoupper(substr($exp[1],0,1));
                
                ?>

                <span class="profil_img" ><?= $_SESSION['fullname'] ?></span>
                <?php if($_SESSION['img_profil'] != '' || $_SESSION['img_profil'] != NULL){ ?>
                    <a class="nav-link" href="<?= base_url().'profil.php/?function=getDataProfil&id='.$_SESSION['id']?>">
                        <span class="profil_img"><img width="48" src="<?= base_url().'aset/profil/'.$_SESSION['img_profil'] ?>">
                    </a>
                </span>
                    
                <?php }else {?>
                    <a class="nav-link" href="<?= base_url().'profil.php/?function=getDataProfil&id='.$_SESSION['id']?>">
                        <span data-letters="<?= $f_char.$l_char ?>" class="profil_img"> </span> 
                    </a>
                <?php } ?>
            </div>
            
        </div>
    </div>
</nav>