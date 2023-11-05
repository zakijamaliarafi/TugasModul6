<?php
include "koneksi.php";

$idupdate = $_GET['id'];
$row = mysqli_fetch_array(mysqli_query($conn, "select * from barang where id_barang='$idupdate'"));

if(isset($_POST['update'])){
    $id = $_POST['id_barang'];
    $nama = $_POST['nama_barang'];
    $harga = $_POST['harga_barang'];

    $update = "update barang set id_barang='$id', nama_barang='$nama', harga_barang='$harga' where id_barang='$idupdate'";
    $query = mysqli_query($conn,$update);
    if($query){
        ?>
        <script>
            alert('Data berhasil Diubah!');
            document.location='view_barang.php';
        </script>
        <?php
    }
}

if($row['id_barang']!=""){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Update</title>
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
    <h1>Edit Data Barang</h1>
    <form action='<?php $_SERVER['PHP_SELF']; ?>' name="update" method="post">
        <table>
            <tr>
              <td>Id Barang</td>
              <td><input type="text" name="id_barang" maxlength="5" required value='<?php echo $row['id_barang']; ?>'></td>  
            </tr>
            <tr>
              <td>Nama</td>
              <td><input type="text" name="nama_barang" required value='<?php echo $row['nama_barang']; ?>'></td>  
            </tr>
            <tr>
              <td>harga</td>
              <td><input type="number" name="harga_barang" required value='<?php echo $row['harga_barang']; ?>'></td>  
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name='update' value="Edit Data Barang">
                </td>
            </tr>
        </table>
    </form>
    </body>
    </html>
    <?php
}
?>