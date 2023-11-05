<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>COD Barang</title>
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
    <table>
        <tr>
            <th>No</th>
            <th>Id Barang</th>
            <th>Nama</th>
            <th>Harga</th>
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
            </tr>
            ";
            $no++;
        }
        ?>
    </table>
    <h1>Data Pembeli</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Id Pembeli</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>Alamat</th>
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
            </tr>
            ";
            $no++;
        }
        ?>
    </table>
    <h1>Data Kurir</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Id Kurir</th>
            <th>Nama</th>
            <th>Nomor HP</th>
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
            </tr>
            ";
            $no++;
        }
        ?>
    </table>
</body>
</html>