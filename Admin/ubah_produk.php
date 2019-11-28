<?php
    require '../koneksi.php';
?>

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

<?php
    $id  = $_GET['id'];
    $sql = mysqli_query($connect, "SELECT * FROM tabel_produk WHERE id_produk='".$id."'");
    $query = mysqli_fetch_assoc($sql);
?>

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
                                
                                    <a class="text-center" href="index.html"> <h4>Ubah Data</h4></a>
        
                                    <form  method="post" action="_edit_produk.php" enctype="multipart/form-data"> 
                                        <div class="row">
                                        <div class="form-group col col-md-6 ml-auto">
                                            <input type="hidden" name="id" value="<?= $id?>">
                                            <label class="col-form-label">Nama Produk</label>
                                            <input type="text" name="nama" class="form-control input-default" placeholder="Nama Produk" value="<?= $query['nama_produk']; ?>">
                                            <label class="col-form-label">Stok</label>
                                            <input type="text" name="stok" class="form-control input-default" placeholder="Stok" value="<?= $query['stok']; ?>">
                                            <label class="col-form-label">Harga</label>
                                            <input type="text" name="harga" class="form-control input-default" maxlength="11" 
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Harga" value="<?= $query['harga_produk']; ?>">
                                        </div>
                                        <div class="form-group col col-md-6 ml-auto">
                                            <label class="col-form-label">Foto Produk</label>
                                            <input type="file" name="foto" class="form-control input-default">
                                            <label for=""></label>
                                            <div class="form-check mb-3">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ubah" class="form-check-input" value="">&nbsp; Ceklis jika ingin mengubah foto</label>
                                            </div>
                                            <label class="col-form-label">Tanggal</label>
                                            <input type="date" name="tanggal" readonly class="form-control input-default" value="<?= $query['tanggal_input']?>" >           
                                            </div>
                                            <button type="button" class="btn btn-primary btn-lg btn-block" name="ubah">Ubah</button>
                                            <a href="index.php?page=produk" class="btn btn-secondary btn-lg btn-block" style="color:white;">Batal</a>
                                        </div>
                                </form>
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





