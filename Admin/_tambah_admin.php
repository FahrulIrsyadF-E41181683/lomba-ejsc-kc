<?php 
include "../koneksi.php" ;

if (isset($_POST['simpan'])){
$nm_admin = $_POST['nm_admin'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$ekstensi_diperbolehkan	= array('png','jpg');
$foto = $_FILES['foto']['name'];
$x = explode('.', $foto);
$ekstensi = strtolower(end($x));
$tmp = $_FILES['foto']['tmp_name'];
$tgl_daftar = $_POST['tanggal'];

$data = mysqli_query($connect, "select id_admin from tabel_admin ORDER BY id_admin DESC LIMIT 1");
while($admin_data = mysqli_fetch_array($data))
{
    $adm_id = $admin_data['id_admin'];
}

$row = mysqli_num_rows($data);
if($row > 0){
  $id_admin = autonumber($adm_id, 3, 3);
}else{
  $id_admin = 'ADM001';
}  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "images/avatar/".$fotobaru;
// Proses upload
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true | move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  
  $sql = mysqli_query($connect, "INSERT INTO `tabel_admin` (`id_admin`, `nama_admin`, `jenis_kelamin`, `alamat`, `no_hp`, `email`, `username`, `password`, `foto_profil`, `tanggal_daftar`) 
                                VALUES ('$id_admin', '$nm_admin', '$jenis_kelamin', '$alamat', '$no_hp', '$email', '$username', '$password', '$fotobaru', '$tgl_daftar');"); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
      echo "<script>alert('Data Berhasil Disimpan');document.location.href='index.php?page=paket'</script>\n"; // Redirect ke halaman admin.php
  }else{
    // Jika Gagal, Lakukan :
    echo "<script>alert('Ekstensi tidak diperbolehkan');document.location.href='#'</script>\n";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "<script>alert('Data Gagal Disimpan karena gagal upload foto');document.location.href='index.php?page=paket'</script>\n";
}} ?>