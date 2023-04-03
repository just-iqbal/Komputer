<?php 
	include 'koneksi.php';
	$db_komputer = new database;
 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Data tambah pelanggan</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
 </head>
 <body>
 	<div class="all">
 	<div class="head">
 		<h1>Pelanggan Baru</h1>
 	</div>

 	<div class="nav">
 		<ul>
			<li><a href="home.php">Home</a></li>
            <li><a href="menukomponen.php">Menu komponen</a></li>
            <li><a href="menupelanggan.php">pelanggan</a></li>
            <li><a href="kasir.php">Data Pesanan</a></li>
            <li><a href="../index.php">Logout</a></li>
	 	</ul>
 	</div>
    <div class="box">
        <h2 style="text-align: center;margin-top: 30px; margin-bottom: 25px">Tambah pelanggan</h2>
 	<table style="padding-center: 720px;">
        <form action="proses.php?aksi=tambahpelanggan" method="post">
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama_pelanggan"></td>
            </tr>
            <tr>
                <td>Tempat Tinggal : </td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td> email : </td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td> no handphone : </td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </form>
    </table>
    </div>
    </div>
 </body>
 </html>