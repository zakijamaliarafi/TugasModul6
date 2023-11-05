<?php
include "koneksi.php";

$idupdate = $_GET['id'];
$row = mysqli_fetch_array(mysqli_query($conn, "select * from kurir where id_kurir='$idupdate'"));

if(isset($_POST['update'])){
    $id = $_POST['id_kurir'];
    $nama = $_POST['nama_kurir'];
    $nohp = $_POST['nomor_hp_kurir'];
    $update = "update kurir set id_kurir='$id', nama_kurir='$nama', nomor_hp_kurir='$nohp' where id_kurir='$idupdate'";
    $query = mysqli_query($conn,$update);
    if($query){
        ?>
        <script>
            alert('Data berhasil Diubah!');
            document.location='view_kurir.php';
        </script>
        <?php
    }
}

if($row['id_kurir']!=""){
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
    <h1>Edit Data Kurir</h1>
    <form action='<?php $_SERVER['PHP_SELF']; ?>' name="update" method="post">
        <table>
            <tr>
              <td>Id Kurir</td>
              <td><input type="text" name="id_kurir" maxlength="5" required value='<?php echo $row['id_kurir']; ?>'></td>  
            </tr>
            <tr>
              <td>Nama</td>
              <td><input type="text" name="nama_kurir" required value='<?php echo $row['nama_kurir']; ?>'></td>  
            </tr>
            <tr>
              <td>Nomor HP</td>
              <td><input type="text" name="nomor_hp_kurir" required value='<?php echo $row['nomor_hp_kurir']; ?>'></td>  
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name='update' value="Edit Data Kurir">
                </td>
            </tr>
        </table>
    </form>
    </body>
    </html>
    <?php
}
?>