<?php
include '../koneksi.php';

$ProdukID = $_POST['id_produk'];

mysqli_query($koneksi,"delete from produk where id_produk='$ProdukID'");

header("location:data_barang.php?pesan=hapus");
?>