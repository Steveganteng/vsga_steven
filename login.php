
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

        .login-container {
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 login-container">
                <h4 class="text-center mb-4"> Login</h4>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                </form>
            </div>
        </div>
    </div>

    <?php
session_start();
require('koneksi.php');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM akun WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['login_user'] = $email;
        header("location: index.php");
    } else {
        echo "<script>alert('Email atau password salah. Silakan coba lagi');</script>";
    }
}

$conn->close();
?>

</body>

</html>
