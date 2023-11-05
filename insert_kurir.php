<?php
include "koneksi.php";

if(isset($_POST['input'])){
    $id = $_POST['id_kurir'];
    $nama = $_POST['nama_kurir'];
    $nohp = $_POST['nomor_hp_kurir'];
    $insert = "INSERT INTO `kurir` (`id_kurir`, `nama_kurir`, `nomor_hp_kurir`) VALUES ('$id', '$nama', '$nohp') ";
    $query = mysqli_query($conn, $insert);
    if($query){
        ?>
        <script>
            alert('Data berhasil Ditambahkan!');
            document.location='view_kurir.php';
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
  <h1>Tambah Data Kurir</h1>
    <form action='<?php $_SERVER['PHP_SELF']; ?>' name="insert" method="post">
        <table>
            <tr>
              <td>Id Kurir</td>
              <td><input type="text" name="id_kurir" maxlength="5" required></td>  
            </tr>
            <tr>
              <td>Nama</td>
              <td><input type="text" name="nama_kurir" required></td>  
            </tr>
            <tr>
              <td>Nomor HP</td>
              <td><input type="text" name="nomor_hp_kurir" required></td>  
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name='input' value="Tambah Data Kurir">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>