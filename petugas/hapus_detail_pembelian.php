<?php
include '../koneksi.php';

$DetailID = $_POST['id_detail'];
$PelangganID = $_POST['id_pelanggan'];

mysqli_query($koneksi,"delete from detailpenjualan where id_detail='$DetailID'");

header("location:detail_pembelian.php?id_pelanggan=$PelangganID");
?>