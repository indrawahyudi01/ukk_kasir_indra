<?php
include '../koneksi.php';

$Stok = $_POST['stok'];
$ProdukID = $_POST['id_produk'];
$JumlahProduk = $_POST['jumlah_produk'];
$Harga = $_POST['harga'];
$DetailID = $_POST['id_detail'];
$PelangganID = $_POST['id_pelanggan'];
$Subtotal = $JumlahProduk * $Harga;
$Stok_total = $Stok - $JumlahProduk;

mysqli_query($koneksi,"update detailpenjualan set subtotal='$Subtotal', jumlah_produk='$JumlahProduk' where id_detail='$DetailID'");
mysqli_query($koneksi,"update produk set stok='$Stok_total' where id_produk='$ProdukID'");

header("location:detail_pembelian.php?id_pelanggan=$PelangganID");
?>