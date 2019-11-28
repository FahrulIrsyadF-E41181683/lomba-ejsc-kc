<?php 
include "../koneksi.php" ;

if (isset($_POST['simpan'])){
$nm_prd = $_POST['nm_prd'];
$stk = $_POST['stk'];
$hrg = $_POST['hrg'];
$ekstensi_diperbolehkan	= array('png','jpg');
$foto = $_FILES['fotoprd']['name'];
$x = explode('.', $foto);
$ekstensi = strtolower(end($x));
$tmp = $_FILES['fotoprd']['tmp_name'];
$tglin = $_POST['tglin'];

$data = mysqli_query($connect, "select id_produk from tabel_produk ORDER BY id_produk DESC LIMIT 1");
while($produk_data = mysqli_fetch_array($data))
{
    $prd_id = $produk_data['id_produk'];
}

$row = mysqli_num_rows($data);
if($row>0){
  $id_produk = autonumber($prd_id, 3, 3);
}else{
  $id_produk = 'PRD001';
}  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "images/avatar/".$fotobaru;
// Proses upload
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true | move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  
  $sql = mysqli_query($connect, "INSERT INTO `tabel_produk` (`id_produk`, `nama_produk`, `stok`, `harga_produk`, `tanggal_input`, `foto_produk`) 
                                VALUES ('$id_produk', '$nm_prd', '$stk', '$hrg', '$tglin', '$fotobaru');"); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
      echo "<script>alert('Data Berhasil Disimpan');document.location.href='index.php?page=produk'</script>\n"; // Redirect ke halaman admin.php
  }else{
    // Jika Gagal, Lakukan :
    echo "<script>alert('Ekstensi tidak diperbolehkan');document.location.href='#'</script>\n";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "<script>alert('Data Gagal Disimpan karena gagal upload foto');document.location.href='index.php?page=produk'</script>\n";
}} ?>