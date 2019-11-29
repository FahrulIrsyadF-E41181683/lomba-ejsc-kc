<?php
include "../koneksi.php";

if (isset($_POST['simpan'])) {
    $tanggal = $_POST['tgl'];
    $total = $_POST['total_pnj'];
    $bayar = $_POST['bayar'];
    $kembali = $_POST['kembali'];
    $id_admin = $_POST['id_admin'];

    $data = mysqli_query($connect, "select id_penjualan from tabel_penjualan ORDER BY id_penjualan DESC LIMIT 1");
    while ($produk_data = mysqli_fetch_array($data)) {
        $prd_id = $produk_data['id_penjualan'];
    }

    $row = mysqli_num_rows($data);
    if ($row > 0) {
        $id_biaya = autonumber($prd_id, 3, 3);
    } else {
        $id_biaya = 'PNJ001';
    }
    // Proses simpan ke Database
    $sql = mysqli_query($connect, "INSERT INTO `tabel_penjualan` (`id_penjualan`, `tanggal_penjualan`, `total_pnj`, `bayar`, `kembali`, `id_admin`) 
                                VALUES ('$id_biaya', '$nm_biy', '$biy', '$tglin');"); // Eksekusi/ Jalankan query dari variabel $query
    if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "<script>alert('Data Berhasil Disimpan');document.location.href='index.php?page=penjualan'</script>\n"; // Redirect ke halaman admin.php
    } else {
        // Jika Gagal, Lakukan :
        echo "<script>alert('Ekstensi tidak diperbolehkan');document.location.href='index.php?page=penjualan'</script>\n";
    }
}
