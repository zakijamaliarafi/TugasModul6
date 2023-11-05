<?php
include "koneksi.php";

if(isset($_POST['input'])){
    $id = $_POST['id_pembeli'];
    $nama = $_POST['nama_pembeli'];
    $nohp = $_POST['nomor_hp_pembeli'];
    $alamat = $_POST['alamat_pembeli'];
    $insert = "INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `nomor_hp_pembeli`, `alamat_pembeli`) VALUES ('$id', '$nama', '$nohp', '$alamat') ";
    $query = mysqli_query($conn, $insert);
    if($query){
        ?>
        <script>
            alert('Data berhasil Ditambahkan!');
            document.location='view_pembeli.php';
        </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert</title>
    <style>
      body{
        text-align: center;
      }
      table {
        margin: auto;
      }
      td {
        text-align: left;
        padding: 5px;
      }
    </style>
</head>
<body>
  <h1>Tambah Data Pembeli</h1>
    <form action='<?php $_SERVER['PHP_SELF']; ?>' name="insert" method="post">
        <table>
            <tr>
              <td>Id Pembeli</td>
              <td><input type="text" name="id_pembeli" maxlength="5" required></td>  
            </tr>
            <tr>
              <td>Nama</td>
              <td><input type="text" name="nama_pembeli" required></td>  
            </tr>
            <tr>
              <td>Nomor HP</td>
              <td><input type="text" name="nomor_hp_pembeli" required></td>  
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat_pembeli" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name='input' value="Tambah Data Pembeli">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>