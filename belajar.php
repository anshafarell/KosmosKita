<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Belajar"; 
            include 'head.php';
        ?>
    </head>
    <body>
        <!-- Bagian Atas -->
        <?php
            $active = "belajar"; 
            $header_title = "Belajar";
            $header_subtitle = "Pada halaman ini, kamu dapat mempelajari berbagai hal mengenai astronomi";
            $header_image_credit = "Gambar oleh NASA | PIA25691: NASA's Juno Mission Captures Swirls in Jovian Storms";
            $background_image_url = "/KosmosKita/assets/img/PIA25691\ NASA\'s\ Juno\ Mission\ Captures\ Swirls\ in\ Jovian\ Storms.jpg";
            include 'top.php';
        ?>
        
        <!-- Pilihan Materi Belajar -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <h1>Apa yang dapat saya pelajari?</h1>
                <hr>
                <a href="/KosmosKita/belajar/apa-itu-astronomi.php" style="text-decoration: none; font-size:x-large;">Apa itu Astronomi?</a>
                <br>
                <a href="/KosmosKita/belajar/benda-benda-langit.php" style="text-decoration: none; font-size:x-large;">Benda-Benda Langit</a>
                <br>
                <a href="/KosmosKita/belajar/tata-surya-kita.php" style="text-decoration: none; font-size:x-large;">Tata Surya Kita</a>
                <br>
                <a href="/KosmosKita/belajar/misi-luar-angkasa.php" style="text-decoration: none; font-size:x-large;">Misi Luar Angkasa Manusia</a>
                <!-- <br>
                <a href="/KosmosKita/belajar/bantah-hoaks.php" style="text-decoration: none; font-size:x-large;">Bantah Hoaks</a> -->
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