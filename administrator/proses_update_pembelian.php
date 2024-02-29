<?php
include '../koneksi.php';

$PelangganID = $_POST['id_pelanggan'];
$NamaPelanggan = $_POST['nama_pelanggan'];
$NomorTelepon = $_POST['nomor_telepon'];
$Alamat = $_POST['alamat'];

mysqli_query($koneksi,"update pelanggan set nama_pelanggan='$NamaPelanggan', nomor_telepon='$NomorTelepon', alamat='$Alamat' where id_pelanggan='$PelangganID'");

header("location:pembelian.php?pesan=update");
?>