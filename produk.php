<?php
@include('navigation.php');
?>
<script>
function logoutConfirmation() {
    if (confirm("Apakah Anda yakin ingin keluar?")) {
        window.location.href = "logout.php";
    }
}
</script>
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
            height: 580px;
        }
        
        .card-body {
            padding: 20px;
        }
        
        .card-img-top {
            height: 350px;
        }
        
        .img-fluid {
            height: 500px;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/spare.jpeg" class="card-img-top" alt="Sparepart Modif Japstyle">
                                <div class="card-body">
                                    <h5 class="card-title">Sparepart Modif Japstyle</h5>
                                    <p class="card-text">Sparepart Modif Japstyle yang tersedia di toko kami sangat lengkap, mulai dari karburator, knalpot, potong body, hingga body custom.<br></p>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product1Modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/sekolah.jpeg" class="card-img-top" alt="Modif Japstyle Budget Pelajar">
                                <div class="card-body">
                                    <h5 class="card-title">Modif Japstyle Budget Pelajar</h5>
                                    <p class="card-text">Modifikasi Japstyle dengan anggaran terbatas, cocok bagi pelajar yang ingin tampil beda dengan motor kesayangan mereka.</p>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product2Modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/hedon.jpeg" class="card-img-top" alt="Modif Japstyle Budget Hedon">
                                <div class="card-body">
                                    <h5 class="card-title">Modif Japstyle Budget Hedon</h5>
                                    <p class="card-text">Ingin merasakan sensasi berkendara dengan gaya Japstyle yang mewah? Temukan opsi modifikasi yang sesuai dengan anggaranmu.</p>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product3Modal">Detail</button>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="product1Modal" tabindex="-1" aria-labelledby="product1ModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="product1ModalLabel">Detail Sparepart Modif Japstyle</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/spare.jpeg" class="img-fluid" alt="Sparepart Modif Japstyle">
                                        <p>Kami menyediakan berbagai macam sparepart untuk modifikasi Japstyle, termasuk karburator, knalpot, dan body custom. Temukan yang sesuai dengan kebutuhan modifikasi motor Anda.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="product2Modal" tabindex="-1" aria-labelledby="product2ModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="product2ModalLabel">Detail Modif Japstyle Budget Pelajar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/sekolah.jpeg" class="img-fluid" alt="Modif Japstyle Budget Pelajar">
                                        <p>Dengan anggaran terbatas, Anda masih bisa merasakan gaya modifikasi Japstyle. Temukan cara untuk memodifikasi motor Anda tanpa perlu mengeluarkan banyak biaya.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="product3Modal" tabindex="-1" aria-labelledby="product3ModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="product3ModalLabel">Detail Modif Japstyle Budget Hedon</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/hedon.jpeg" class="img-fluid" alt="Modif Japstyle Budget Hedon">
                                        <p>Rasakan sensasi berkendara yang mewah dengan gaya modifikasi Japstyle yang sesuai dengan selera dan anggaran Anda.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#product1ModalBtn').click(function() {
                $('#product1Modal').modal('show');
            });

            $('#product2ModalBtn').click(function() {
                $('#product2Modal').modal('show');
            });

            $('#product3ModalBtn').click(function() {
                $('#product3Modal').modal('show');
            });
        });
    </script>
</body>

</html>