<?php
session_start();

// Cek apakah pengguna sudah login
if (isset($_SESSION['login_user'])) {
    // Jika sudah login, tampilkan menu log out
    $menu_signin = '<li class="list-group-item"><a href="logout.php">Log Out</a></li>';
    $menu_signup = '';
} else {
    // Jika belum login, tampilkan menu sign in dan sign up
    $menu_signin = '<li class="list-group-item"><a href="login.php">Sign In</a></li>';
    $menu_signup = '<li class="list-group-item"><a href="registrasi.php">Sign Up</a></li>';
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japz</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        .contact {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            color: #333;
        }
        
        p {
            color: #666;
        }
        
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .col-md-6 {
            width: calc(50% - 10px);
        }
        
        h3 {
            color: #333;
        }
        
        .social-icons a {
            color: #666;
            font-size: 20px;
            margin-right: 10px;
        }
        
        .social-icons a:hover {
            color: #333;
        }
        
        h3 {
            margin-bottom: 20px;
        }
        
        .social-icons {
            margin-top: 20px;
        }
    </style>

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
                </ul><br><br><br><br><br><br><br><br>
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
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <!-- konten -->
                <div class="contact">
                    <h2>Kontak Kami</h2>
                    <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami melalui salah satu metode di bawah ini:</p>
                    <div class="row" style="text-align: center;">
                        <div class="col-md-6">
                            <h3>Alamat Kantor</h3>
                            <a href>Jl. Serma Muda Simanjuntak No. 122,<br> Balige, Toba Samosir, Sumatera Utara</a>
                        </div>
                        <div class="col-md-6">
                            <h3>Informasi Kontak</h3>
                            <a href>Email: info@japstylerider.com<br></a>
                            <a href>Telepon: (021) 1234-5678<br></a>
                            <a href>WhatsApp: 0812-3456-7890<br></a>
                        </div>
                    </div>
                    <div class="social-icons" style="text-align: center;">
                        <a href="#" class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="fab fa-youtube"></i>
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