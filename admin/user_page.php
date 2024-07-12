<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Admin"; 
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
                <h1>Fitur Admin</h1>
                <hr>
                <a href="change_password.php" style="text-decoration: none; font-size:x-large;">Ubah Password</a>
                <br>
                <a href="/KosmosKita/admin/users.php" style="text-decoration: none; font-size:x-large;">Kelola Admin</a>
                <br>
                <a href="/KosmosKita/alat/kabarastronomi/admin.php" style="text-decoration: none; font-size:x-large;">Kabar Astronomi - Kelola Artikel</a>
                <br>
                <a href="/KosmosKita/alat/faktamenarik/fun_facts.php" style="text-decoration: none; font-size:x-large;">Fakta Menarik - Kelola Fakta</a>
                <br>
                <a href="logout.php" style="text-decoration: none; font-size:x-large;">Keluar</a>
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
