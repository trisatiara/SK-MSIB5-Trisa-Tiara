<?php 

include 'koneksi.php';

$nama_produk = $_POST["nama_produk"];
$gambar = $_POST["gambar"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];
$kategori = $_POST["kategori"];
$brand = $_POST["brand"];

// Upload Proses
if($_FILES["fileToUpload"]["size"]!=0){ 
    $target_dir = "img/"; 
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { 
        echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
    $result = mysqli_query($conn, "UPDATE `produk` set `nama_produk` = '$nama_produk', `harga` = '$harga', `stok` = '$stok', `id_kategori` = '$kategori', `id_brand` = '$brand', `gambar` = '$target_file' where `id_produk` = '$_GET[id_produk]'");
}

$result = mysqli_query($conn, "UPDATE `produk` set `nama_produk` = '$nama_produk', `harga` = '$harga', `stok` = '$stok', `id_kategori` = '$kategori', `id_brand` = '$brand' where `id_produk` = '$_GET[id_produk]'");

header("Location:admin.php");

?>