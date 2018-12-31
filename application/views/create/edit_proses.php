<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("koneksi.php");

  // membuat variabel untuk menampung data dari form edit
  
  $username = $_POST['username'];
  $password = $_POST['password'];
	$nama	= $_POST['nama'];
	
  //buat dan jalankan query UPDATE
  $query  = "UPDATE tbl_user SET ";
  $query .= "username = '$username' ";
  $query .= "password = '$password' ";
  $query .= "nama = '$nama',";
 
  $result = mysqli_query($link, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

//lakukan redirect ke halaman index.php
header("location:User.php");

?>