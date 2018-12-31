<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nama = $_POST['nama'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO tbl_user VALUES (NULL, '$username', '$password','$nama')";
  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal : ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:User.php");
?>