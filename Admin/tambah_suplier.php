<?php 
include "../koneksi.php" ;

if (isset($_POST['simpan'])){
$nm_suplier = $_POST['nm_suplier'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$ekstensi_diperbolehkan	= array('png','jpg');
$foto = $_FILES['foto']['name'];
$x = explode('.', $foto);
$ekstensi = strtolower(end($x));
$tmp = $_FILES['foto']['tmp_name'];

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
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "images/avatar/".$fotobaru;
// Proses upload
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true | move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  
  $sql = mysqli_query($connect, "INSERT INTO `tabel_suplier` (`id_suplier`, `nama_suplier`, `alamat`, `no_hp`, `foto_profil`) 
                                VALUES ('$id_suplier', '$nm_suplier', '$alamat', '$no_hp', '$foto');"); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
      echo "<script>alert('Data Berhasil Disimpan');document.location.href='index.php?page=suplier'</script>\n"; // Redirect ke halaman admin.php
  }else{
    // Jika Gagal, Lakukan :
    echo "<script>alert('Ekstensi tidak diperbolehkan');document.location.href='#'</script>\n";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "<script>alert('Data Gagal Disimpan karena gagal upload foto');document.location.href='index.php?page=suplier'</script>\n";
}} ?>