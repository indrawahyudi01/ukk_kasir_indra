<?php
include '../koneksi.php';

$ProdukID = $_POST['id_produk'];
$DetailID = $_POST['id_detail'];
$PelangganID = $_POST['id_pelanggan'];

mysqli_query($koneksi,"update detailpenjualan set id_produk='$ProdukID' where id_detail='$DetailID'");

header("location:detail_pembelian.php?id_pelanggan=$PelangganID");
?>