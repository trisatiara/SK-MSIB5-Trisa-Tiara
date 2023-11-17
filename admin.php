<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko ATK</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <img src="img/logo.png" alt="Logo" class="d-inline-block align-text-top">
        <span>Stationery</span>
        <ul class="sidebar-menu">
        <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
        </ul>
    </div>

    <!-- Data Produk -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    include 'koneksi.php';
                    $query = mysqli_query($conn, "SELECT * FROM produk as p JOIN brand as b ON p.id_brand = b.id_brand JOIN kategori as k ON p.id_kategori = k.id_kategori ORDER BY id_produk ASC");
                    ?>

                    <h2 style="text-align:center"><b>DATA PRODUK</b></h2>

                    <a class="btn btn-primary" style="margin-bottom:10px" href="tambah.php"> Tambah Data </a><br>

                    <table id="data-produk" class="table table-striped table-bordered">
                        <thead>
                            <tr style="text-align:center">
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th style="width:80px">Gambar</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Brand</th>
                                <th style="width:100px">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                            if(mysqli_num_rows($query)>0){ 
                            $no = 1;
                            while($data = mysqli_fetch_array($query)){
                            ?>
                            
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $data["nama_produk"] ?></td>
                                <td> <img src="<?php echo $data["gambar"] ?>" width="100px"> </td>
                                <td><?php echo $data["harga"] ?></td>
                                <td><?php echo $data["stok"] ?></td>
                                <td><?php echo $data["nama_kategori"] ?></td>
                                <td><?php echo $data["nama_brand"] ?></td>
                                <td> <a href="edit.php?id_produk=<?php echo $data["id_produk"] ?>" class="btn btn-warning" style="padding:2px 12px;"> Edit </a>
                                <a href="proses_hapus.php?id_produk=<?php echo $data["id_produk"] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger" style="padding:2px"> Delete </a> </td>
                            </tr>

                            <?php  $no++; } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script>
       $(document).ready(function () {
            $('#data-produk').DataTable();
        });
    </script>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>