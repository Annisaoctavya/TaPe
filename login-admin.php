<?php 
session_start();
if (!isset($_SESSION['email'])){
$_SESSION['email'] = NULL;
}
include 'core/base_url.php';
include 'core/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Login </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
        <meta name="viewport" content="width=device-width",intial-scale="1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

    </head>
    <body background="beri hape.png">
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-5 p-3 mb-5 lg card" style="background-color: rgba(0,0,0,0.5)">
                    <h1 class="text-white">Login Admin</h1>
                    <form method="POST" action="logic/login_admin.php">
                        <div class="row justify-content-center">
                            <div class="col-sm-7">
                                    <i class="fas fa-user text-white" ></i>
                                    <input type="text" placeholder="Email" name="email">
                            </div>
                            <div class="col-sm-7">
                                <i class="fas fa-key text-white"></i>
                                    <input type="password" placeholder="Password" aria-hidden="true" name="password">
                            </div>
                            <div class="col-sm-7">
                                <button  style=" margin-top: 20px; border: none; border-radius: 40px; width: 210px;
                                background-color: lightgray;" class="btn btn-outline-dark" type="submit" name="login">Login</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </body>
</html>