<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../../admin/login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Fakta Menarik - Tambah Fakta"; 
            include '../../head.php';
        ?>
    </head>
    <body id="page-top">
        <!-- Bagian Atas -->
        <?php
            $active = "admin"; 
            $header_title = "Fakta Menarik";
            $header_subtitle = "Halaman ini dapat memberikan fakta menarik seputar dunia astronomi secara acak";
            $header_image_credit = "Gambar oleh NASA | PIA25778: PREFIRE Satellite Illustration";
            $background_image_url = "/KosmosKita/assets/img/PIA25778\ PREFIRE\ Satellite\ Illustration.jpg";
            include '../../top.php';
        ?>

        <!-- Konten -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <h1>Tambah Fakta Menarik</h1>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <br>
                        <br>
                        <h6>Silakan tambah fakta menarik dengan mengisi kolom di bawah ini.</h6>
                        <form action="add_fact_process.php" method="post">
                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                                <textarea name="fact_text" class="form-control" rows="4" cols="50" placeholder="Masukkan fakta menarik disini..." required></textarea><br><br>
                            </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-lg btn-dark btn-block">Tambah Fakta Menarik</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bagian Bawah -->
        <?php
            $quote = "Kita tidak mempertanyakan apa guna burung berkicau, sebab kicauan adalah kenikmatan mereka semenjak mereka diciptakan untuk berkicau.<br><br>Kita pun semestinya tidak mempertanyakan mengapa manusia bersusah-payah menyingkap rahasia langit....<br><br>Keanekaragaman fenomena Alam sungguh luar biasa, dan harta karun yang tersembunyi di langit begitu banyak dan tertata dengan sangat baik sehingga akal manusia tidak akan pernah kekurangan nutrisi segar.";
            $name = "Johannes Kepler, kutipan dari Mysterium Cosmographicum";
            $year = "1571 - 1630";
            $occupation = "Astronomer";
            $credit = "Gambar oleh NASA | PIA25434: Orion Nebula in Infrared";
            $background_image_url = "/KosmosKita/assets/img/PIA25434\ Orion\ Nebula\ in\ Infrared.jpg";
            include '../../bottom.php';
        ?>
    </body>
</html>