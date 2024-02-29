<?php
include '../koneksi.php';

$PelangganID = $_POST['id_pelanggan'];
$PenjualanID = $_POST['id_penjualan'];

mysqli_query($koneksi,"insert into detailpenjualan values('','$PenjualanID','','','')");

header("location:detail_pembelian.php?id_pelanggan=$PelangganID");
?>