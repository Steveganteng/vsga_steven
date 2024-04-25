<?php 
session_start();

if (isset($_SESSION['login_user'])) {
    $menu_signin = '<li class="list-group-item"><a href="logout.php" onclick="return confirm(\'Apakah Anda yakin ingin keluar?\')">Log Out</a></li><br><br>';
    $menu_signup = '';
} else {
    $menu_signin = '<li class="list-group-item"><a href="login.php">Sign In</a></li>';
    $menu_signup = '<li class="list-group-item"><a href="registrasi.php">Sign Up</a></li>';
}
?>
<div class="col-md-3" id="sidebar">
    <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt="Logo Perusahaan"></a>
    </div>
    <ul class="list-group">
        <li class="list-group-item"><a href="profile.php">Profile</a></li>
        <li class="list-group-item"><a href="galeri.php">Gallery Foto</a></li>
        <li class="list-group-item"><a href="klien.php">Klien Kami</a></li>
        <li class="list-group-item"><a href="produk.php">Produk Kami</a></li>
        <?php echo $menu_signin; ?>
        <?php echo $menu_signup; ?>
    </ul><br><br><br><br><br><br>
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