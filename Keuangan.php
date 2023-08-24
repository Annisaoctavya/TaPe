<?php
include 'core/base_url.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Keuangan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
            <link rel="stylesheet" href="FAQA.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
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
                            <a class="nav-link text-black" href="http://localhost/tape/logic/logout-admin.php"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Keluar"></i> Log Out</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10 p-5 pt-2 " style="margin-top :50px;">
                    <div class="row text-dark">
                        <h3>Keuangan  | <b>Admin</b>
                        </h3><hr>
                        <div class="container" style="  text-align: center; margin-top: 15px;">
                            <div class="row justify-content-center mb-4">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <form id="filter" >
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="datepicker" placeholder="Pilih Tanggal" name="filter-date" required>
                                                <button type="submit" class="btn btn-primary filter-date">Filter</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-sm-6 head">
                                    <p>Bulan</p>
                                </div>
                                <div class="col-sm-6 head">
                                    <p> Total Nominal</p>
                                </div>
                                
                            </div>
                        </div>
                        <hr>
                        <div class="container" style="text-align: center;">
                            <div class="row justify-content-center " id="item-keuangan">                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
            <script type="text/javascript">
            var startDate = new Date(1991 - 1 - 1),
            endDate = new Date(new Date().getFullYear(), 12 - 1, 31);
            $("#datepicker").datepicker({
            autoclose: true,
            disableTouchKeyboard: true,
            format: "yyyy-mm-dd",
            startDate: startDate,
            endDate: endDate
            });
            </script>
            <script type="text/javascript">
            var request;
            $("#filter").submit(function(event){
            event.preventDefault();
            $('#item-keuangan div').remove();
            if (request) {
            request.abort();
            }
            var $form = $(this);
            var $inputs = $form.find("input");
            var serializedData = $form.serialize();
            $inputs.prop("disabled", true);
            // var date = $('#datepicker').val();
            request = $.ajax({
            url: "<?= base_url() ?>logic/getKeuangan.php",
            type: "post",
            data: serializedData
            });
            // Callback handler that will be called on success
            request.done(function (response, textStatus, jqXHR){
            // Log a message to the console
             console.log(response);
                var res = JSON.parse(response);
                $.each(res, function(i, item) {
                    // item.nominal
                   
                    var html = '<div class="col-sm-6"><p>'+item.waktu+'</p></div>'+
                                '<div class="col-sm-6"><p>'+item.nominal+'</p></div>';
                    $('#item-keuangan').append(html);
                });
            });
            // Callback handler that will be called on failure
            request.fail(function (jqXHR, textStatus, errorThrown){
            // Log the error to the console
            console.error(
            "The following error occurred: "+
            textStatus, errorThrown
            );
            });
            // Callback handler that will be called regardless
            // if the request failed or succeeded
            request.always(function () {
            // Reenable the inputs
            $inputs.prop("disabled", false);
            });
            });
            </script>
        </body>
    </html>