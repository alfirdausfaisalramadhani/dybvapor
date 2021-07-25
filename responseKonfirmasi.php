<?php
include 'koneksi.php';
$id= $_GET['id'];
$accept= "UPDATE pemesanan SET statuspembayaran = 'Sudah dikonfirmasi' where id_pemesanan = $id ";
mysqli_query($koneksi,$accept);
header("location:pesanan.php");
?>