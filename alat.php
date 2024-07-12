<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Alat"; 
            include 'head.php';
        ?>
    </head>
    <body>
        <!-- Bagian Atas -->
        <?php
            $active = "alat"; 
            $header_title = "Alat";
            $header_subtitle = "Halaman ini menampilkan daftar fitur-fitur khusus seputar astronomi yang dapat digunakan oleh pengguna";
            $header_image_credit = "Gambar oleh NASA | PIA25691: NASA's Juno Mission Captures Swirls in Jovian Storms";
            $background_image_url = "/KosmosKita/assets/img/PIA25691\ NASA\'s\ Juno\ Mission\ Captures\ Swirls\ in\ Jovian\ Storms.jpg";
            include 'top.php';
        ?>

        <!-- Konten -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <h1>Kalkulator</h1>
                <hr>
                <a href="./alat/calculator-distance.php" style="text-decoration: none; font-size:x-large;">Kalkulator Jarak</a>
                <br>
                <a href="./alat/calculator-objects.php" style="text-decoration: none; font-size:x-large;">Kalkulator Volume Benda Langit</a>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1>Fitur Spesial</h1>
                <hr>
                <a href="./alat/apod.php" style="text-decoration: none; font-size:x-large;">Astronomy Picture of the Day - APOD (NASA)</a>
                <br>
                <a href="./alat/news-english.php" style="text-decoration: none; font-size:x-large;">Berita dari Dunia Astronomi (Bahasa Inggris)</a>
                <br>
                <a href="./alat/kabarastronomi/kabarastronomi.php" style="text-decoration: none; font-size:x-large;">Kabar Astronomi</a>
                <br>
                <a href="./alat/faktamenarik/faktamenarik.php" style="text-decoration: none; font-size:x-large;">Fakta Menarik</a>
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
            include 'bottom.php';
        ?>
    </body>
</html>
