<?php
include "../koneksi.php";
if (isset($_POST['submit'])) {

    $nm_biaya = $_POST['nm_biaya'];
    $biaya = $_POST['biaya'];


    $data = mysqli_query($connect, "select id_biaya from tabel_biaya ORDER BY id_biaya DESC LIMIT 1");
    while ($admin_data = mysqli_fetch_array($data)) {
        $biaya_id = $admin_data['id_biaya'];
    }

    $row = mysqli_num_rows($data);
    if ($row > 0) {
        $id_biaya = autonumber($biaya_id, 3, 3);
    } else {
        $id_biaya = 'BIY001';
    }

    $sql = mysqli_query($connect, "INSERT INTO tabel_biaya (id_biaya,nama_biaya,biaya) values ('$id_biaya','$nm_biaya','$biaya')");

    if ($sql) {
        echo "<script>alert('Data Berhasil Di Inputkan');document.location.href='index.php?page=biaya'</script>";
    } else {
        echo "<script>alert('Data Gagal Dimasukkan');document.location.href='index.php?page=biaya'</script>";
    }
}
