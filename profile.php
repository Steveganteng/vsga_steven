<?php
@include('navigation.php');
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japz</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <style>
        .adv-image {
            width: 300px;
            height: 300px;
        }
        
        .pro-image {
            width: 1200px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
                <div class="profile">
                    <h2>Profil Klub</h2>
                    <img src="img/profile.jpeg" class="pro-image">
                    <p>Japstyle Rider adalah Klub yang bergerak di bidang modifikasi sepeda motor bergaya Japstyle. Dengan pengalaman lebih dari 10 tahun, kami telah menjadi salah satu pemimpin pasar dalam industri modifikasi sepeda motor di Sumatera Utara.</p>
                </div>
                <div class="experience">
                    <h2>Pengalaman Perusahaan</h2>
                    <p>Dalam perjalanannya, Japstyle Rider telah berhasil mewujudkan impian para pecinta sepeda motor Japstyle dengan menyediakan layanan modifikasi yang berkualitas dan terpercaya. Kami telah mengerjakan ribuan proyek modifikasi dengan hasil
                        yang memuaskan pelanggan kami.</p>
                    <p>Kami juga telah berpartisipasi dalam berbagai acara dan pameran otomotif yang bergengsi, di mana produk-produk kami selalu mendapat apresiasi dan tanggapan positif dari pengunjung.</p>
                </div>
                <div class="advantages" style="text-align: center;">
                    <h2>Kelebihan Perusahaan</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="advantage-item">
                                <img src="img/kualitas.jpeg" alt="Kualitas Produk" class="adv-image">
                                <h3>Kualitas Produk</h3>
                                <p>Kami hanya menyediakan produk-produk berkualitas tinggi yang telah teruji dan terpercaya, sehingga Anda dapat memiliki kepuasan dan kepercayaan tinggi terhadap setiap pembelian.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="advantage-item">
                                <img src="img/pro.jpeg" alt="Pengalaman dan Profesionalisme" class="adv-image">
                                <h3>Pengalaman dan Profesionalisme</h3>
                                <p>Dengan tim yang berpengalaman dan profesional dalam bidang modifikasi sepeda motor, kami siap memberikan solusi terbaik dan hasil terbaik untuk memenuhi kebutuhan modifikasi Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>