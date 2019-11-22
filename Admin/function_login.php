<?php
    require 'koneksi.php';

    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jk'];
    $email = $_POST['email'];
    $username = strtolower(stripcslashes($_POST['username']));
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $password2 = mysqli_real_escape_string($connect, $_POST['password2']);

    $sql = mysqli_query($connect, "SELECT username OR email FROM tabel_admin WHERE username = '$username' OR email = '$email'");

    if(isset($_POST['daftar'])) {
        if($sql) > 0) {
            header("Location: page_register.php");
        }
    }
?>