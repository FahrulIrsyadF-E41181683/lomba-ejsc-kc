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
    $sql = mysqli_query($connect, "SELECT * FROM tabel_admin WHERE id_admin='".$id."'");
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
        
                                    <form  method="post" action="_edit_admin.php" enctype="multipart/form-data"> 
                                        <div class="row">
                                        <div class="form-group col col-md-6 ml-auto">
                                            <input type="hidden" name="id" value="<?= $id?>">
                                            <label class="col-form-label">Nama Admin</label>
                                            <input type="text" name="nama" class="form-control input-default" placeholder="Nama Admin" value="<?= $query['nama_admin']; ?>">
                                            <label class="col-form-label">Jenis Kelamin</label>
                                            <select class="form-control" name="jk" id="sel1">
                                                <option><?= $query['jenis_kelamin']; ?></option>
                                                <option value="">Laki-laki</option>
                                                <option value="">Perempuan</option>
                                            </select>
                                            <label class="col-form-label">Alamat</label>
                                            <textarea type="text" name="alamat" class="form-control input-default" placeholder="Alamat" style="height:184px;"><?= $query['alamat']; ?></textarea>
                                            <label class="col-form-label">No Hp</label>
                                            <input type="text" name="nohp" class="form-control input-default" maxlength="13" 
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="No Hp" value="<?= $query['no_hp']; ?>">
                                        </div>
                                        <div class="form-group col col-md-6 ml-auto">
                                            <label class="col-form-label">Email</label>
                                            <input type="email" name="email" class="form-control input-default" placeholder="Email" value="<?= $query['email']; ?>">
                                            <label class="col-form-label">Username</label>
                                            <input type="text" name="username" class="form-control input-default" placeholder="Username" value="<?= $query['username']; ?>">
                                            <label class="col-form-label">Password</label>
                                            <input type="password" name="password" class="form-control input-default" placeholder="Password" value="<?= $query['password']; ?>">
                                            <label class="col-form-label">Foto Profil</label>
                                            <input type="file" name="foto" class="form-control input-default">
                                            <label for=""></label>
                                            <div class="form-check mb-3">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ubah" class="form-check-input" value="">&nbsp; Ceklis jika ingin mengubah foto</label>
                                            </div>
                                            <label class="col-form-label">Tanggal</label>
                                            <input type="date" name="tanggal" readonly class="form-control input-default" value="<?= $query['tanggal_daftar']?>" >           
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="ubah">Ubah</button>
                                            <a href="index.php?page=paket" class="btn btn-secondary btn-lg btn-block" style="color:white;">Batal</a>
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





