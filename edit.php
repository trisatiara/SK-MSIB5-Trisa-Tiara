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

    <!-- Edit Data Produk -->
    <section>

        <?php
            include 'koneksi.php';

            $produk = mysqli_query($conn,"SELECT * from produk where id_produk='$_GET[id_produk]'");

            while($p = mysqli_fetch_array($produk)){
                $id_produk = $p["id_produk"];
                $nama_produk = $p["nama_produk"];
                $gambar = $p["gambar"];
                $harga = $p["harga"];
                $stok = $p["stok"];
                $kategori = $p["id_kategori"];
                $brand = $p["id_brand"];
            }
        ?>

        <form action="proses_edit.php?id_produk=<?php echo $id_produk ?>" method="post" enctype="multipart/form-data" style="box-shadow: 0 0 7px gray; padding: 20px; border: 1px solid grey; border-radius: 10px">
            <h3 style="padding-top:10px; padding-bottom:15px"><center>Edit Data Produk</center></h3>
            
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" value="<?php echo $nama_produk ?>">
                
            <label class="form-label">Gambar</label><br>
            <img src="<?php echo $gambar ?>" alt="" width="100" style="margin-bottom:15px">
            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" value="<?php echo $gambar ?>">
                
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" value="<?php echo $harga ?>">
                
            <label class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" value="<?php echo $stok ?>">
                
            <label class="form-label">Kategori</label>
            <select class="form-select" name="kategori" id="kategori">
                <?php
                $query = mysqli_query($conn, "SELECT * FROM kategori");
                if(mysqli_num_rows($query)>0){
                    while($data = mysqli_fetch_array($query)){
                        $selected = ($data["id_kategori"] == $kategori) ? 'selected' : '';
                        echo "<option value='" . $data["id_kategori"] . "' $selected>" . $data["nama_kategori"] . "</option>";
                    }
                } else {
                    echo "<option value=''>No items available</option>";
                }
                ?>
            </select>
            
            <label class="form-label">Brand</label>
            <select class="form-select" name="brand" id="brand">
                <?php
                $query = mysqli_query($conn, "SELECT * FROM brand");
                if(mysqli_num_rows($query)>0){
                    while($data = mysqli_fetch_array($query)){
                        $selected = ($data["id_brand"] == $brand) ? 'selected' : '';
                        echo "<option value='" . $data["id_brand"] . "' $selected>" . $data["nama_brand"] . "</option>";
                    }
                } else {
                    echo "<option value=''>No items available</option>";
                }
                ?>
            </select>

            <input class="btn btn-primary" type="submit" name="submit" value="Simpan" style="margin-top:20px; margin-left:135px" onclick="return confirm('Simpan perubahan data?')">
        </form>  
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>