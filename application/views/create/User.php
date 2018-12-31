<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      table{
        width: 840px;
        margin: auto;
      }
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Create User</h1>
    <center><a href="input.php">Input Data &Gt; </a></center>
    <br/>
    <table border="1">
      <tr>
        <th>username</th>
        <th>password</th>
        <th>nama</th>
      </tr>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM tbl_user ORDER BY id ASC";
      $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      //buat perulangan untuk element tabel dari data tbl_user
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td>$data[username]</td>"; //menampilkan data username
        echo "<td>$data[password]</td>"; //menampilkan data password
        echo "<td>$data[nama]</td>"; //menampilkan data nama
        // membuat link untuk mengedit dan menghapus data
        echo '<td>
          <a href="edit.php?id='.$data['id'].'">Edit</a> /
          <a href="hapus.php?id='.$data['id'].'"
              onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
        </td>';
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
    </table>
  </body>
</html>