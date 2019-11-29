<?php
// Load file koneksi.php
require_once '../koneksi.php';
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_POST['id'];
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$jk   = $_POST['jk'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$tanggal = $_POST['tanggal'];
// Cek apakah user ingin mengubah fotonya atau tidak
if (isset($_POST['ubah'])) { // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];

  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = date('dmYHis') . $foto;

  // Set path folder tempat menyimpan fotonya
  $path = "images/avatar/" . $fotobaru;
  // Proses upload
  if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM tabel_admin WHERE id_admin='" . $id . "'";
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if (is_file("images/avatar/" . $data['foto_profil'])) // Jika foto ada
      unlink("images/avatar/" . $data['foto_profil']); // Hapus file foto sebelumnya yang ada di folder images

    // Proses ubah data ke Database
    $query = "UPDATE tabel_admin SET nama_admin='" . $nama . "', jenis_kelamin='" . $jk . "', alamat='" . $alamat . "', no_hp='" . $nohp . "', email='" . $email . "', username='" . $username . "', password='" . $password . "', foto_profil='" . $fotobaru . "', tanggal_daftar='" . $tanggal . "' WHERE id_admin='" . $id . "'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      echo "<script>alert('Data Berhasil Disimpan');document.location.href='index.php?page=paket'</script>\n"; // Redirect ke halaman admin.php
    } else {
      // Jika Gagal, Lakukan :
      echo "<script>alert('Data Gagal Disimpan karena gagal terhubung ke server');document.location.href='index.php?page=paket'</script>\n";
    }
  } else {
    // Jika gambar gagal diupload, Lakukan :
    echo "<script>alert('Data Gagal Disimpan karena gagal upload foto');document.location.href='index.php?page=paket'</script>\n";
  }
} else { // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
  $query = "UPDATE tabel_admin SET nama_admin='" . $nama . "', jenis_kelamin='" . $jk . "', alamat='" . $alamat . "', no_hp='" . $nohp . "', email='" . $email . "', username='" . $username . "', password = '" . $password . "', foto_profil='" . $fotobaru . "', tanggal_daftar='" . $tanggal . "' WHERE id_admin='" . $id . "'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "<script>alert('Data Berhasil Disimpan');document.location.href='index.php?page=paket'</script>\n"; // Redirect ke halaman admin.php
  } else {
    // Jika Gagal, Lakukan :
    echo "<script>alert('Data Gagal Disimpan karena gagal terhubung ke server');document.location.href='index.php?page=paket'</script>\n";
  }
}
