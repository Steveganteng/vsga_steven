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
            border: 1px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card img {
            height: 300px;
        }

        .card-title {
            text-align: center;
            margin-top: 10px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            margin: 0;
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container mt-4">
                <h2 class="text-center mb-4">Daftar Client</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/client1.png" class="card-img-top" alt="Client 1">
                            <div class="card-body">
                                <h5 class="card-title">Maladin Siboro</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/client2.jpeg" class="card-img-top" alt="Client 2">
                            <div class="card-body">
                                <h5 class="card-title">Brad Pitt</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/client3.jpeg" class="card-img-top" alt="Client 3">
                            <div class="card-body">
                                <h5 class="card-title">Joko Widodo</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/client4.jpeg" class="card-img-top" alt="Client 3">
                            <div class="card-body">
                                <h5 class="card-title">Keanu Reeves</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/client5.jpeg" class="card-img-top" alt="Client 3">
                            <div class="card-body">
                                <h5 class="card-title">Jason Statham</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/client6.jpeg" class="card-img-top" alt="Client 3">
                            <div class="card-body">
                                <h5 class="card-title">Matt Damon</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>