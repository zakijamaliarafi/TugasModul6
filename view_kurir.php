<?php
include "koneksi.php";

$del=$_GET['del'];
if($del!=""){
    $sql = "delete from kurir where id_kurir='$del'";
    $query = mysqli_query($conn, $sql);
    if($query){
    ?>
    <script>alert('Data Berhasil Dihapus');document.location='view_kurir.php';</script>
    <?php
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View</title>
    <style>
        body{
            text-align: center;
        }
        table {
            margin: auto;
        }
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data Kurir</h1>
    <p><a href="insert_kurir.php">Tambah Data</a></p>
    <table>
        <tr>
            <th>No</th>
            <th>Id Kurir</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $sql = "select * from kurir order by id_kurir asc";
        $query = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($query)){
            echo "
            <tr>
                <td>$no</td>
                <td>$row[id_kurir]</td>
                <td>$row[nama_kurir]</td>
                <td>$row[nomor_hp_kurir]</td>
                <td>
                    <a href='update_kurir.php?id=$row[id_kurir]'>Edit</a>
                    <a href='view_kurir.php?del=$row[id_kurir]'>Hapus</a>
                </td>
            </tr>
            ";
            $no++;
        }
        ?>
    </table>
</body>
</html>