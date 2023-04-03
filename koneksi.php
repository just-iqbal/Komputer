<?php 
class database{
    var $host = 'localhost';
    var $name = 'root';
    var $pw = '';
    var $db = 'db_komputer';

    function __construct(){
        $koneksi = mysqli_connect ($this->host, $this->name, $this->pw, $this->db);
        mysqli_select_db($koneksi, $this->db);
    }
    // koneksi  
    function tampilkomponen(){
        $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
        $data = mysqli_query($koneksi, "SELECT * FROM tb_vga");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    // koneksi tambah komponen
    function tambahkomponen($nama_Barang, $series_barang, $harga){
        $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
        $data = mysqli_query($koneksi, "INSERT INTO tb_vga VALUES('', '$nama_Barang', '$series_barang', '$harga')");
    }

    // koneksi tambahpelanggan
    function tambahpelanggan($nama_pelanggan, $alamat, $email, $no_hp){
        $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
        $data = mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('', '$nama_pelanggan', '$alamat', '$email', '$no_hp')");
    }

    // koneksi pelanggan
    function tampilpelanggan(){
        $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
        $data = mysqli_query($koneksi, "SELECT * FROM pelanggan");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d ;
        }
        return $hasil;
    }
}
?>