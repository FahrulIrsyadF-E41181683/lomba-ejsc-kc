<?php
// Load file koneksi.php
require_once '../koneksi.php';
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_POST['id'];
// Ambil Data yang Dikirim dari Form
$nama  = $_POST['nama'];
$biaya = $_POST['biaya'];
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM tabel_biaya WHERE id_biaya='".$id."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  
    // Proses ubah data ke Database
    $query = "UPDATE tabel_biaya SET nama_biaya='".$nama."', biaya='".$biaya."' WHERE id_biaya='".$id."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      echo "<script>alert('Data Berhasil Disimpan');document.location.href='index.php?page=biaya'</script>\n"; // Redirect ke halaman admin.php
    }else{
      // Jika Gagal, Lakukan :
      echo "<script>alert('Data Gagal Disimpan karena gagal terhubung ke server');document.location.href='index.php?page=biaya'</script>\n";
    }
?>