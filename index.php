<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "KosmosKita"; 
            include 'head.php';
        ?>
    </head>
    <body id="page-top">
        <!-- Bagian Atas -->
        <?php
            $active = ""; 
            $header_title = "KosmosKita";
            $header_subtitle = "Tempat dimana kamu dapat mengenal dunia astronomi";
            $header_image_credit = "Gambar oleh NASA | PIA05566: Artist's Concept of Sedna";
            $background_image_url = "/KosmosKita/assets/img/PIA05566.png";
            include 'top.php';
        ?>

        <!-- Konten -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Apa itu Astronomi?</h2>
                <br>
                <br>
                <h4 class="text-center">Apa itu tentang rasi bintang dan ramalannya?</h4>
                <h4 class="text-center">Apa bedanya dengan Astrologi? Astrofisika?</h4>
                <br>
                <h4 class="text-center">Astronomi itu tidak sulit kok! Coba klik tombol di bawah ini.</h4>
                <br>
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-dark" href="/KosmosKita/belajar/apa-itu-astronomi.php">
                        <b>Cari Tahu</b>
                    </a>
                </div>
            </div>
            
        </section>

        <!-- Bagian Bawah -->
        <?php
            $quote = "Kosmos adalah segala yang ada atau pernah ada atau akan ada.<br><br>Perenungan kita yang paling samar mengenai Kosmos telah membangkitkan keingintahuan kita-rasa merinding bulu roma, suara yang tercekat, sensasi samar terjatuh dari ketinggian, seakan-akan itu kenangan lama.<br><br>Kita menyadari bahwa kita tengah menuju misteri terbesar.";
            $name = "Carl Sagan, kutipan dari Kosmos";
            $year = "1934-1996";
            $occupation = "Astronomer";
            $credit = "Gambar oleh NASA | PIA04209: Galaxy NGC 3079";
            $background_image_url = "/KosmosKita/assets/img/PIA04209.jpg";
            include 'bottom.php';
        ?>
    </body>
</html>
