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
            border: none;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            transition: transform 0.3s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.2);
        }

        .card:hover .card-overlay {
            opacity: 1;
        }

        .card-img-top {
            height: 300px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container mt-4">
                <h2 class="mb-4">Galeri Foto</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/img1.jpg" class="card-img-top" alt="Foto 1">
                            <div class="card-overlay">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/hedon.jpeg" class="card-img-top" alt="Foto 2">
                            <div class="card-overlay">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/img3.jpg" class="card-img-top" alt="Foto 3">
                            <div class="card-overlay">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/img2.jpg" class="card-img-top" alt="Foto 3">
                            <div class="card-overlay">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/sekolah.jpeg" class="card-img-top" alt="Foto 3">
                            <div class="card-overlay">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/profile.jpeg" class="card-img-top" alt="Foto 3">
                            <div class="card-overlay">
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