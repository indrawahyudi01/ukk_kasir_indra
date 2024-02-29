<?php
include '../koneksi.php';

$PelangganID = $_POST['id_pelanggan'];
$NamaPelanggan = $_POST['nama_pelanggan'];
$NomorTelepon = $_POST['nomor_telepon'];
$Alamat = $_POST['alamat'];
$TanggalPenjualan = $_POST['tanggal_penjualan'];

mysqli_query($koneksi,"insert into pelanggan values('$PelangganID','$NamaPelanggan','$Alamat','$NomorTelepon')");
mysqli_query($koneksi,"insert into penjualan values('','$TanggalPenjualan','','$PelangganID')");

header("location:pembelian.php?pesan=simpan");
?>