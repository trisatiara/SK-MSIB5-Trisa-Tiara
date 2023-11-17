<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko ATK</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<body>
    <?php
        include 'koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM produk ORDER BY id_produk ASC");
    ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" alt="Logo" class="d-inline-block align-text-top" style="margin-right:5px"><b>Stationery</b></a>

            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#produk" style="color:white"><b>Produk</b></a>
                <a class="nav-link active" aria-current="page" href="#about" style="color:white"><b>About</b></a>
                <a class="nav-link active" aria-current="page" href="#kontak" style="color:white"><b>Kontak</b></a>

            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bg1.jpg" class="d-block w-100" alt="..." style="height:655px">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="font-size:80px; color:black"><b>Stationery Store</b></h1>
                    <h5 style="color:black">Jual aneka alat tulis kantor dan perlengkapan sekolah dengan harga terbaik</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/bg2.jpg" class="d-block w-100" alt="..." style="height:655px">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="font-size:80px; color:black"><b>Stationery Store</b></h1>
                    <h5 style="color:black">Jual aneka alat tulis kantor dan perlengkapan sekolah dengan harga terbaik</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/bg3.jpg" class="d-block w-100" alt="..." style="height:655px">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="font-size:80px; color:black"><b>Stationery Store</b></h1>
                    <h5 style="color:black">Jual aneka alat tulis kantor dan perlengkapan sekolah dengan harga terbaik</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Produk -->
    <div class="section">
		<div class="container" style="width:70%">
            <h1 style="padding-top:80px" id="produk"><b><center>Produk</center><b></h1><br>
            <div class="box">
                <div class="row">
                    <?php 
                    while($data = mysqli_fetch_array($query)){
                    ?>
                        <div class="col-md-3 mb-3">
                            <div class="card h-100">
                                <div class="image-box">
                                    <img src="<?php echo $data['gambar'] ?>" alt="..." height="200px" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size:18px"><b><?php echo $data['nama_produk'] ?></b></h5>
                                    <p class="card-text" style="color:#d21f3c">Rp. <?php echo $data['harga'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="about" id="about">
        <img src="img/about.jpeg" style="width: 180px; height: 170px">
        <h2 style="color:#990012"><b>Trisa Tiara</b></h2>
        <p>
            Lahir di Palembang pada tanggal 16 Januari 2003<br>
            Saat ini sedang menempuh pendidikan di Politeknik Negeri<br>
            Sriwijaya Jurusan Manajemen Informatika pada semester 7<br>
            dan sedang mengikuti salah satu program Kampus Merdeka yaitu Studi<br> 
            Independen bersama mitra Eduwork di kelas Full Stack Web Developer
        </p>
    </div>

    <!-- Footer -->
	<div class="footer">
		<div class="footer-content">
            <h2 id="kontak"><b>Stationery Store</b></h2>
            <ul class="socials">
                <li><a href="https://instagram.com/trisatiaraa_?igshid=MWFqajM5bGRkbzhxZQ=="><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://wa.me/6281373959993"><i class="fa fa-whatsapp"></i></a></li>
                <li><a href="mailto:trisatiara123@gmail.com"><i class="fa fa-envelope"></i></a></li>
            </ul>
            <small>Copyright &copy; 2023 - Trisa Tiara</small>
        </div>
	</div>
    
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slide");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex-1].style.display = "block";
        }
    </script>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>