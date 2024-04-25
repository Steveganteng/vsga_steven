<?php
session_start();

if (isset($_SESSION['login_user'])) {
    $menu_signin = '<li class="list-group-item"><a href="logout.php">Log Out</a></li>';
    $menu_signup = '';
} else {
    $menu_signin = '<li class="list-group-item"><a href="login.php">Sign In</a></li>';
    $menu_signup = '<li class="list-group-item"><a href="registrasi.php">Sign Up</a></li>';
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japz </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">


</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" id="sidebar">
                <div class="logo">
                    <img src="img/logo.png" alt="Logo Perusahaan">
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><a href="profile.php">Profile</a></li>
                    <li class="list-group-item"><a href="galeri.php">Gallery Foto</a></li>
                    <li class="list-group-item"><a href="klien.php">Klien Kami</a></li>
                    <li class="list-group-item"><a href="produk.php">Produk Kami</a></li>
                    <?php echo $menu_signin; ?>
                    <?php echo $menu_signup; ?>
                </ul>
                <br><br><br><br><br><br><br><br>
                <p style="text-align: center;">Hak Cipta © <br>2023 Nama Perusahaan</p>
            </div>

            <div class="col-md-10" id="content">
                <div class="header">
                    <div class="name">
                        <h1>Japstyle Rider</h1>
                    </div>
                </div>

                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="visimisi.php">Visi dan Misi</a></li>
                                <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak Kami</a></li>
                                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- Carousel -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/img1.jpg" class="d-block w-100" alt="Carousel 1">
                        </div>
                        <div class="carousel-item">
                            <img src="img/img2.jpg" class="d-block w-100" alt="Carousel 2">
                        </div>
                        <div class="carousel-item">
                            <img src="img/img3.jpg" class="d-block w-100" alt="Carousel 3">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>