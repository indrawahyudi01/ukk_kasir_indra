<?php
include '../koneksi.php';

$PelangganID = $_POST['id_pelanggan'];

mysqli_query($koneksi,"delete from pelanggan where id_pelanggan='$PelangganID'");
mysqli_query($koneksi,"delete from penjualan where id_pelanggan='$PelangganID'");

header("location:pembelian.php?pesan=hapus");
?>