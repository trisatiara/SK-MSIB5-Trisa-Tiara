<?php 
include 'koneksi.php';

$nama_produk = $_POST["nama_produk"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];
$kategori = $_POST["kategori"];
$brand = $_POST["brand"];

// Upload Proses
$target_dir = "img/"; 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { 
    echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query($conn, "INSERT INTO `produk` (`nama_produk`, `harga`, `stok`, `id_kategori`, `id_brand`, `gambar`) VALUES ('$nama_produk', '$harga', '$stok', '$kategori', '$brand', '$target_file');");

header("Location:admin.php");

?>