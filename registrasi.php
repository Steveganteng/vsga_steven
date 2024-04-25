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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japz</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="css/auth.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .register-container {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 register-container">
                <h4 class="text-center mb-4">Buat Akun Baru</h4>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat E-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan Nomor Telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Daftar</button>
                </form>
            </div>
        </div>
    </div>

    <?php
require('koneksi.php');
// Memeriksa apakah data telah dikirim dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Menangkap data dari formulir
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $no_telepon = $_POST['nomor_telepon'];
    $tgl_lahir = $_POST['tanggal_lahir'];
    $password = $_POST['password'];

    // Menyiapkan statement SQL untuk menyimpan data ke database
    $sql = "INSERT INTO akun (nama_lengkap, email, no_telepon, tgl_lahir, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Pastikan koneksi database sudah dibuka sebelumnya

    // Bind parameter ke statement
    $stmt->bind_param("sssss", $nama_lengkap, $email, $no_telepon, $tgl_lahir, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Pendaftaran berhasil!');</script>";
        // Redirect ke halaman login.php setelah pendaftaran berhasil
        header("Location: login.php");
        exit(); // Pastikan agar tidak ada kode PHP ekstra yang dijalankan setelah pengalihan header
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup statement
    $stmt->close();
}

// Tutup koneksi database setelah selesai menggunakan
$conn->close();
?>


</body>

</html>
