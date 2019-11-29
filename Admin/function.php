<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">

                                <div class="col-sm-12 col-md-6">
                                    <label>
                                        <h4>Peramalan Stok</h4>
                                    </label>
                                </div>
                                <?php
                                error_reporting(0);
                                $n = $_GET["n"];
                                ?>

                                <form action="" method="post" name="asd">

                                    <?php
                                    // for untuk pengulangan input nilai data bulan sebanyak nilai (n) atau jumlah bulan yang di inputkan(n)        
                                    for ($x = 0; $x < $n; $x++) {

                                        ?>

                                        <label class="col-form-label">Masukkan stok Bulan ke - <?php echo "$x" ?></label>
                                        <input type="number" name="<?php echo "y$x" ?>" class="form-control input-default" placeholder="Masukkan Stok Bulan ke - <?php echo "$x" ?> ">


                                    <?php
                                        $Jx += $x;
                                    }
                                    ?>

                                    <br>
                                    <br>
                                    <label class="col-form-label">Masukkan Bulan yang akan di Ramal</label>
                                    <input type="number" name="dicari" min="<?= $n + 1 ?>" maxlength="2" class="form-control input-default" placeholder="Masukkan stok Bulan yang akan di Ramal">
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="hitung">Hitung</button>
                                    <a href="index.php?page=ramal" class="btn btn-secondary btn-lg btn-block">Kembali</a>




                                    <?php // proses jika di klik Hitung
                                    if (isset($_POST["hitung"])) {

                                        $dicari = $_POST["dicari"];
                                        // for untuk pengulangan menghitung nilai x y x2 dan xy
                                        for ($x = 0; $x < $n; $x++) {
                                            //variabel hitung untuk menangkap data y dan x , x dimulai dari 0
                                            $hitung = $_POST["y$x"];
                                            // menghitung nilai y berdasarkan nilai x yang udah tersimpan di variabel hitung
                                            $y[$x] = $hitung;

                                            $Jy += $y[$x];
                                            //menghitung nilai x2 berdasarkan nilai x yang udah tersimpan di variabel hitung         
                                            $x2[$x] = $x * $x;

                                            $Jx2 += $x2[$x];
                                            //menghitung nilai xy berdasarkan nilai x yang udah tersimpan di variabel hitung
                                            $xy[$x] = $y[$x] * $x;

                                            $Jxy += $xy[$x];
                                        }
                                        // print jumlah y, jumlah x, jumlah x2, jumlah xy
                                        // menghitung nilai b
                                        $b = ($n * $Jxy - $Jx * $Jy) / ($n * $Jx2 - ($Jx * $Jx));
                                        // menghitung nilai a
                                        $a = ($Jy / $n) - ($b * ($Jx / $n));

                                        //menghitung jumlah penjualan kecap bulan ke-n    
                                        $bulan = $a + ($b * $Jx);
                                        //print nilai penjualan kecap bulan ke n
                                        ?>


                                        <label class="col-form-label">Ini adalah stok bulan ke- <?php echo $dicari; ?></label>
                                        <input type="text" readonly class="form-control input-default" value=" <?php echo $bulan; ?>">


                                    <?php
                                        echo '</form>';
                                    } else {
                                        echo "<br>";
                                    }
                                    ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>

</html>