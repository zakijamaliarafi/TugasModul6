<?php
include "koneksi.php";

$idupdate = $_GET['id'];
$row = mysqli_fetch_array(mysqli_query($conn, "select * from pembeli where id_pembeli='$idupdate'"));

if(isset($_POST['update'])){
    $id = $_POST['id_pembeli'];
    $nama = $_POST['nama_pembeli'];
    $nohp = $_POST['nomor_hp_pembeli'];
    $alamat = $_POST['alamat_pembeli'];
    $update = "update pembeli set id_pembeli='$id', nama_pembeli='$nama', nomor_hp_pembeli='$nohp', alamat_pembeli='$alamat' where id_pembeli='$idupdate'";
    $query = mysqli_query($conn,$update);
    if($query){
        ?>
        <script>
            alert('Data berhasil Diubah!');
            document.location='view_pembeli.php';
        </script>
        <?php
    }
}

if($row['id_pembeli']!=""){
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
    <h1>Edit Data Pembeli</h1>
    <form action='<?php $_SERVER['PHP_SELF']; ?>' name="update" method="post">
        <table>
        <tr>
              <td>Id Pembeli</td>
              <td><input type="text" name="id_pembeli" maxlength="5" required value='<?php echo $row['id_pembeli']; ?>'></td>  
            </tr>
            <tr>
              <td>Nama</td>
              <td><input type="text" name="nama_pembeli" required value='<?php echo $row['nama_pembeli']; ?>'></td>  
            </tr>
            <tr>
              <td>Nomor HP</td>
              <td><input type="text" name="nomor_hp_pembeli" required value='<?php echo $row['nomor_hp_pembeli']; ?>'></td>  
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat_pembeli" cols="30" rows="10"><?php echo $row['alamat_pembeli']; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name='update' value="Edit Data Pembeli">
                </td>
            </tr>
        </table>
    </form>
    </body>
    </html>
    <?php
}
?>