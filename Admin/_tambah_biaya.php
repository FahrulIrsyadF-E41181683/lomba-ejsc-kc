<?php 
include "../koneksi.php" ;

if (isset($_POST['simpan'])){
$nm_biy = $_POST['nm_biy'];
$biy = $_POST['biy'];
$tglin = $_POST['tglin'];

$data = mysqli_query($connect, "select id_biaya from tabel_biaya ORDER BY id_biaya DESC LIMIT 1");
while($produk_data = mysqli_fetch_array($data))
{
    $prd_id = $produk_data['id_biaya'];
}

$row = mysqli_num_rows($data);
if($row>0){
  $id_biaya = autonumber($prd_id, 3, 3);
}else{
  $id_biaya = 'BIY001';
}   
  // Proses simpan ke Database
  $sql = mysqli_query($connect, "INSERT INTO `tabel_biaya` (`id_biaya`, `nama_biaya`, `biaya`, `tanggal_input`) 
                                VALUES ('$id_biaya', '$nm_biy', '$biy', '$tglin');"); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "<script>alert('Data Berhasil Disimpan');document.location.href='index.php?page=biaya'</script>\n"; // Redirect ke halaman admin.php
  }else{
    // Jika Gagal, Lakukan :
    echo "<script>alert('Ekstensi tidak diperbolehkan');document.location.href='index.php?page=biaya'</script>\n";
  }
} ?>