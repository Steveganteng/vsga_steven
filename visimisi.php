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
        .card {
            margin-bottom: 20px;
            border: none;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            height: 620px;
        }
        
        .card-body {
            padding: 20px;
        }
        
        h3 {
            margin-bottom: 15px;
        }
        
        p {
            font-size: 16px;
            line-height: 1.6;
        }
        
        .card-img-top {
            height: 300px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
                <div class="container mt-4">
                    <h2 class="text-center mb-4">Visi & Misi</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/img2.jpg" class="card-img-top" alt="Visi">
                                <div class="card-body">
                                    <h3 class="text-center">Visi</h3>
                                    <p>Menjadi pusat komunitas global yang tidak hanya merayakan warisan budaya motor Japstyle, tetapi juga menjadi destinasi utama bagi para penggemar yang mencari inspirasi, layanan modifikasi berkualitas, dan hubungan yang
                                        erat dalam komunitas yang bersatu.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/img1.jpg" class="card-img-top" alt="Misi">
                                <div class="card-body">
                                    <h3 class="text-center">Misi</h3>
                                    <p>1. Memelihara dan mempromosikan warisan budaya motor Japstyle.</p>
                                    <p>2. Menyediakan layanan modifikasi berkualitas tinggi.</p>
                                    <p>3. Mendorong kebaikan sosial dan kontribusi positif kepada masyarakat.</p>
                                    <p>4. Memperkuat kepemimpinan dan keterlibatan anggota dalam pengembangan klub dan tujuan bersama.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>