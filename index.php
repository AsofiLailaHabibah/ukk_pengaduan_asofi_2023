<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, instal-scale=1">
    <title>Aplikasi Pengaduan Masyarakat | Asofi Laila Habibah</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body style="background-image: url('assets/img/aplikasipengaduan.jpg');">

<nav class="navbar navbar-expand-lg" style="background-color:lightpink;">
  <div class="container">
    <a class="navbar-brand" href="index.php">Aplikasi Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=registrasi">Daftar Akun</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=login">Login</a>
        </li>
      </ul>
    </div>
  
</nav>

<?php
if (isset($_GET['page'])) {
    $page= $_GET['page'];

    switch ($page) {
        case 'login';
        include 'login.php';
        break;
        case 'registrasi';
        include 'registrasi.php';
        break;

    default:
        echo "Halaman Tidak Tersedia";
        break;
    }
} else {
    include 'home.php';
}

?>

</div>
<footer class="footer py-2" style="background-color: lightpink;">
    <div class="container">
        <p class="text-center">UKK RPL 2023 | Asofi Laila Habibah | Smkn 1 Karawang</p>
</div>
</footer>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>