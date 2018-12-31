<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <h1>Input Data</h1>
    <div class="container">
      <form id="form_tbl_user" action="input_proses.php" method="post">
        <fieldset>
        <legend>Input Data User</legend>
          
          <p>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
          </p>
          <p>
            <label for="password">password : </label>
            <input type="password" name="password" id="password">
          </p>
          <p >
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
          </p>

        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>