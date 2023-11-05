<?php
include "koneksi.php";

$del=$_GET['del'];
if($del!=""){
    $sql = "delete from barang where id_barang='$del'";
    $query = mysqli_query($conn, $sql);
    if($query){
    ?>
    <script>alert('Data Berhasil Dihapus');document.location='view_barang.php';</script>
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
    <h1>Data Barang</h1>
    <p><a href="insert_barang.php">Tambah Data</a></p>
    <table>
        <tr>
            <th>No</th>
            <th>Id Barang</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $sql = "select * from barang order by id_barang asc";
        $query = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($query)){
            echo "
            <tr>
                <td>$no</td>
                <td>$row[id_barang]</td>
                <td>$row[nama_barang]</td>
                <td>$row[harga_barang]</td>
                <td>
                    <a href='update_barang.php?id=$row[id_barang]'>Edit</a>
                    <a href='view_barang.php?del=$row[id_barang]'>Hapus</a>
                </td>
            </tr>
            ";
            $no++;
        }
        ?>
    </table>
</body>
</html>