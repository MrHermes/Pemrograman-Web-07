<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <div id="title">
            <h3>Pendaftaran Siswa Baru</h3>
            <h1>SMK Coding</h1>
        </div>
        <div id="nav-link-group">
            <a href="#" class="nav-link">Beranda</a>
            <a href="#" class="nav-link">Daftar</a>
            <a href="#" class="nav-link">Akun</a>
        </div>
    </nav>
    <main>
        <div id="main-menu">
            <h2>Sistem Pendaftaran Siswa Baru SMK Coding</h2>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "<p class='success'>Pendaftaran berhasil!</p>";
            } else {
                echo "<p class='fail'>Pendaftaran gagal!</p>";
            }
            ?>
            <ul class="main-button">
                <li class="main-choose"><a href="form-daftar.php">Daftar Baru</a></li>
                <li class="main-choose"><a href="list-siswa.php">List Pendaftar</a></li>
            </ul>
        </div>
    </main>

    </body>
</html>