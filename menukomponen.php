<?php
include 'koneksi.php';
$dbfutsal = new database;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pesanan</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="all">
    <div class="head">
        <h1>komponen OK</h1>
    </div>

    <div class="nav">
        <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="menukomponen.php">Menu komponen</a></li>
            <li><a href="menupelanggan.php">pelanggan</a></li>
            <li><a href="kasir.php">data pesanan</a></li>
            <li><a href="../index.php">Loqout</a></li>
        </ul>
    </div>
    <center>
        <div class="box">
            <h2 style="text-align: center; margin-bottom: 20px">komponen</h2>
            <a href="tambahkomponen.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px">tambah Komponen</a>
            <table border="1" cellspacing="0" cellpadding="8" border="1" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
            <tr>
                <th>No</th>
                <th>Nama VGA</th>
                <th>series</th>
                <th>Harga</th>
            </tr>
            <?php
            $no=1;
            foreach ($dbfutsal->tampilkomponen() as $x ){
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $x ['nama_Barang'];?></td>
                <td><?php echo $x ['series_barang'];?></td>
                <td><?php echo $x ['harga'];?></td>
            </tr>
            <?php
            }?>
        </table>
    </center>
    </div>
</body>
</html>