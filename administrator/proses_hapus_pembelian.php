<?php
//koneksi database
include '../koneksi.php';

// menangkap data id yang dikirim dari url
$PelangganID = $_POST['PelangganID'];
mysqli_query($koneksi,"delete from penjualan where PelangganID='$PelangganID'");
// mengalihkan halaman kembeli ke pembelian.php
header("location:pembelian.php?pesan=hapus");

?>