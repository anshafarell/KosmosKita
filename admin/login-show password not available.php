<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username; // Untuk menyimpan username di session
        header('Location: user_page.php');
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = "Admin - Masukkan Username dan Password"; 
        include '../head.php';
    ?>
</head>
<body>
    <!-- Bagian Atas -->
    <?php
        $active = "admin"; 
        $header_title = "Admin";
        $header_subtitle = "Halaman ini adalah halaman khusus yang hanya diakses oleh Admin, yakni pengelola situs web KosmosKita";
        $header_image_credit = "Gambar oleh NASA | PIA25691: NASA's Juno Mission Captures Swirls in Jovian Storms";
        $background_image_url = "/KosmosKita/assets/img/PIA25691\ NASA\'s\ Juno\ Mission\ Captures\ Swirls\ in\ Jovian\ Storms.jpg";
        include '../top.php';
    ?>

    <!-- Konten -->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h1>Masukkan Username dan Password</h1>
            <hr>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <br>
                    <br>
                    <h6>Untuk masuk sebagai Admin dan mengakses fitur khusus Admin, silakan masukkan username dan password pada kolom yang tersedia di bawah ini.</h6>
                    <form method="post" action="">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="username" class="form-control" placeholder="Username" required><br>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-lg btn-dark btn-block">Masuk</button>
                    </form>
                    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Bagian Bawah -->
    <?php
        $quote = "Benarkah ada banyak dunia, ataukah hanya ada satu dunia? Ini adalah salah satu pertanyaan paling mulia dan agung dalam penyelidikan alam.";
        $name = "Albertus Magnus";
        $year = "skt. 1200 - 1280";
        $occupation = "Ilmuwan, Filsuf, Uskup";
        $credit = "Gambar oleh NASA | PIA23131: Lunar Flashlight (Artist's Concept)";
        $background_image_url = "/KosmosKita/assets/img/PIA23131\ Lunar\ Flashlight\ \(Artist\'s\ Concept\).jpg";
        include '../bottom.php';
    ?>
</body>
</html>
