<?php
include "koneksi.php";

if(isset($_POST['input'])){
    $id = $_POST['id_barang'];
    $nama = $_POST['nama_barang'];
    $harga = $_POST['harga_barang'];
    $insert = "INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`) VALUES ('$id', '$nama', '$harga') ";
    $query = mysqli_query($conn, $insert);
    if($query){
        ?>
        <script>
            alert('Data berhasil Ditambahkan!');
            document.location='view_barang.php';
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
  <h1>Tambah Data Barang</h1>
    <form action='<?php $_SERVER['PHP_SELF']; ?>' name="insert" method="post">
        <table>
            <tr>
              <td>Id Barang</td>
              <td><input type="text" name="id_barang" maxlength="5" required></td>  
            </tr>
            <tr>
              <td>Nama</td>
              <td><input type="text" name="nama_barang" required></td>  
            </tr>
            <tr>
              <td>Harga</td>
              <td><input type="number" name="harga_barang" required></td>  
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name='input' value="Tambah Data Barang">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>