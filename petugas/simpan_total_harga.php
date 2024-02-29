<?php
include '../koneksi.php';

$TotalHarga = $_POST['total_harga'];
$PenjualanID = $_POST['id_penjualan'];
$PelangganID = $_POST['id_pelanggan'];

mysqli_query($koneksi,"update penjualan set total_harga='$TotalHarga' where id_penjualan='$PenjualanID'");

header("location:pembelian.php?id_pelanggan=$PelangganID");
?>