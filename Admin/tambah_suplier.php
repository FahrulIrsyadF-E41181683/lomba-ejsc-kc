<?php 
include "../koneksi.php" ;

if (isset($_POST['simpan'])){
$nm_suplier = $_POST['nm_suplier'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$data = mysqli_query($connect, "select id_suplier from tabel_suplier ORDER BY id_suplier DESC LIMIT 1");
while($suplier_data = mysqli_fetch_array($data))
{
    $sup_id = $suplier_data['id_suplier'];
}

$row = mysqli_num_rows($data);
if($row>0){
  $id_suplier = autonumber($sup_id, 3, 3);
}else{
  $id_suplier = 'SUP001';
}  

  
  $sql = mysqli_query($connect, "INSERT INTO tabel_suplier(id_suplier, nama_suplier, alamat, no_hp) 
                                VALUES('$id_suplier', '$nm_suplier', '$alamat', '$no_hp')"); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
      echo "<script>alert('Data Berhasil Disimpan');document.location.href='index.php?page=suplier'</script>\n"; // Redirect ke halaman admin.php
  }else{
    // Jika Gagal, Lakukan :
    echo "<script>alert('Ekstensi tidak diperbolehkan');document.location.href='#'</script>\n";
  }
} ?>