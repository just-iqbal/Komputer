<?php
include 'koneksi.php';
$db_komputer = new database();

$aksi = $_GET['aksi'];
//proses Komputer
if ($aksi == "tambahkomponen"){
    $db_komputer->tambahkomponen($_POST['nama_Barang'],
      $_POST['series_barang'],
      $_POST['harga']);
      header("location:menukomponen.php");
}
if ($aksi == "tambahpelanggan"){
  $db_komputer->tambahpelanggan($_POST['nama_pelanggan'],
    $_POST['alamat'],
    $_POST['email'],
    $_POST['no_hp']);
    header("location:menupelanggan.php");
}
elseif($aksi == "hapuspesanan"){
  $db_komputer->hapuspesanan($_GET['id_pesanan']);
  header("location:kasir.php"); 
}
?>