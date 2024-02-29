<?php
include '../koneksi.php';

$ProdukID = $_POST['id_produk'];
$NamaProduk = $_POST['nama_produk'];
$Harga = $_POST['harga'];
$Stok = $_POST['stok'];

mysqli_query($koneksi,"update produk set nama_produk='$NamaProduk', harga='$Harga', stok='$Stok' where id_produk='$ProdukID'");

header("location:data_barang.php?pesan=update");
?>