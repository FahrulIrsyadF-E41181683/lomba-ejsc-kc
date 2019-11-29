<?php
error_reporting(0);
session_start();

include "../koneksi.php";

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$harga    = mysqli_query($connect, "select SUM(total_pnj) AS total from tabel_penjualan");
$jmlt     = mysqli_query($connect, "select COUNT(id_penjualan) AS jmlt from tabel_penjualan");
$jmlp     = mysqli_query($connect, "select COUNT(ID_CUST) AS jmlp from customer");
$row      = mysqli_fetch_array($harga);
$row2     = mysqli_fetch_array($jmlt);
$row3     = mysqli_fetch_array($jmlp);
$sum      = $row['total'];
$jmltr    = $row2['jmlt'];
$jmlcs    = $row3['jmlp'];
$now = date_create('now')->format('Y-m-d');

if ($username == "" || $username == NULL || empty($username)) {

    echo "<script>document.location.href='login.php'</script>\n";
} else {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Nama Toko | Menjual Sembarang Macam Sembako</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <!-- Pignose Calender -->
        <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
        <!-- Chartist -->
        <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
        <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
        <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
        <!-- Custom Stylesheet -->
        <link href="./plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body>

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


        <!--**********************************
        Main wrapper start
    ***********************************-->
        <div id="main-wrapper">

            <!--**********************************
            Nav header start
        ***********************************-->
            <div class="nav-header">
                <div class="brand-logo">
                    <a href="index.php">
                        <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                        <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                        <span class="brand-title">
                            <img src="images/logo-text.png" alt="">
                        </span>
                    </a>
                </div>
            </div>
            <!--**********************************
            Nav header end
        ***********************************-->

            <!--**********************************
            Header start
        ***********************************-->
            <div class="header">
                <div class="header-content clearfix">

                    <div class="nav-control">
                        <div class="hamburger">
                            <span class="toggle-icon"><i class="icon-menu"></i></span>
                        </div>
                    </div>
                    <div class="header-left">
                        <div class="input-group icons">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                            </div>
                            <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                            <div class="drop-down animated flipInX d-md-none">
                                <form action="#">
                                    <input type="text" class="form-control" placeholder="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="header-right">
                        <ul class="clearfix">

                            <li class="icons">
                                <h4><?php echo $_SESSION['username']; ?></h4>
                            </li>
                            <li class="icons">
                                <label for=""></label>
                            </li>
                            <li class="icons dropdown">
                                <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                    <span class="activity active"></span>
                                    <img src="images/avatar/<?php echo $_SESSION['foto_profil']; ?>" height="40" width="40" alt="">
                                </div>
                                <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="?page=editprofil&id=<?php echo $_SESSION['id_admin']; ?>"><i class="icon-user"></i> <span>Profile</span></a>
                                            </li>
                                            <hr class="my-2">
                                            <li><a href="?page=logout" onclick="return confirm('Apakah adna ingin Logout ?')"><i class="icon-key"></i> <span>Logout</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

            <!--**********************************
            Sidebar start
        ***********************************-->
            <div class="nk-sidebar">
                <div class="nk-nav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label">Dashboard</li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="?page=home">Home</a></li>
                                <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-label">Forms</li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="?page=paket">Admin</a></li>
                                <li><a href="?page=produk">Produk</a></li>
                                <li><a href="?page=biaya">Biaya</a></li>
                                <li><a href="?page=suplier">Suplier</a></li>
                                <li><a href="?page=penjualan">Penjualan</a></li>
                                <li><a href="?page=ramal">Peramalan Stok</a></li>
                                <li><a href="?page=laba">Perhitungan Laba</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!--**********************************
            Sidebar end
        ***********************************-->

            <!--**********************************
            Content body start
        ***********************************-->
            <div class="content-body">
                <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];

                        switch ($page) {
                            case 'home':
                                include "_index.php";
                                break;
                            case 'paket':
                                include "./_admin.php";
                                break;
                            case 'produk':
                                include "./_produk.php";
                                break;
                            case 'biaya':
                                include "./_biaya.php";
                                break;
                            case 'suplier':
                                include "./_suplier.php";
                                break;
                            case 'laba':
                                include "./_laba.php";
                                break;
                            case 'ramal':
                                include "./_ramal_stok.php";
                                break;
                            case 'logout':
                                include "./logout.php";
                                break;
                            case 'contact':
                                include "contact.php";
                                break;
                            case 'logout':
                                include "logout.php";
                                break;
                            case 'editadmin':
                                include "_edit_admin.php";
                                break;
                            case 'editprofil':
                                include "./_edit_profil.php";
                                break;
                            case 'penjualan':
                                include "./_penjualan.php";
                                break;
                            case 'function':
                                include "function.php";
                                break;
                            case 'editgaleri':
                                include "makanan/formeditgaleri.php";
                                break;
                            default:
                                include "./_admin.php";
                                break;
                        }
                    }
                    ?>
                    <!-- #/ container -->
            </div>
            <!--**********************************
            Content body end
        ***********************************-->


            <!--**********************************
            Footer start
        ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Aksata</a> 2018</p>
                </div>
            </div>
            <!--**********************************
            Footer end
        ***********************************-->
        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
        <script src="plugins/common/common.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/gleek.js"></script>
        <script src="js/styleSwitcher.js"></script>

        <!-- Chartjs -->
        <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
        <!-- Circle progress -->
        <script src="./plugins/circle-progress/circle-progress.min.js"></script>
        <!-- Datamap -->
        <script src="./plugins/d3v3/index.js"></script>
        <script src="./plugins/topojson/topojson.min.js"></script>
        <script src="./plugins/datamaps/datamaps.world.min.js"></script>
        <!-- Morrisjs -->
        <script src="./plugins/raphael/raphael.min.js"></script>
        <script src="./plugins/morris/morris.min.js"></script>
        <!-- Pignose Calender -->
        <script src="./plugins/moment/moment.min.js"></script>
        <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
        <!-- ChartistJS -->
        <script src="./plugins/chartist/js/chartist.min.js"></script>
        <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

        <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
        <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
        <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

        <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
        <script src="./js/plugins-init/chartjs-init.js"></script>

        <script src="./plugins/sweetalert/js/sweetalert.min.js"></script>
        <script src="./plugins/sweetalert/js/sweetalert.init.js"></script>

        <script src="./js/dashboard/dashboard-1.js"></script>



    </body>

    </html>

<?php } ?>