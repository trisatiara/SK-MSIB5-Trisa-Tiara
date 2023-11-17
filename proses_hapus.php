<?php 
include 'koneksi.php';

$result = mysqli_query($conn, "DELETE from produk where `id_produk` = '$_GET[id_produk]'");

header("Location:admin.php");

?>