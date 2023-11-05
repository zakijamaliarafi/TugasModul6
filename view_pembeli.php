<?php
include "koneksi.php";

$del=$_GET['del'];
if($del!=""){
    $sql = "delete from pembeli where id_pembeli='$del'";
    $query = mysqli_query($conn, $sql);
    if($query){
    ?>
    <script>alert('Data Berhasil Dihapus');document.location='view_pembeli.php';</script>
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
    <h1>Data Pembeli</h1>
    <p><a href="insert_pembeli.php">Tambah Data</a></p>
    <table>
        <tr>
            <th>No</th>
            <th>Id Pembeli</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $sql = "select * from pembeli order by id_pembeli asc";
        $query = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($query)){
            echo "
            <tr>
                <td>$no</td>
                <td>$row[id_pembeli]</td>
                <td>$row[nama_pembeli]</td>
                <td>$row[nomor_hp_pembeli]</td>
                <td>$row[alamat_pembeli]</td>
                <td>
                    <a href='update_pembeli.php?id=$row[id_pembeli]'>Edit</a>
                    <a href='view_pembeli.php?del=$row[id_pembeli]'>Hapus</a>
                </td>
            </tr>
            ";
            $no++;
        }
        ?>
    </table>
</body>
</html>