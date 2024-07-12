<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Fakta Menarik"; 
            include '../../head.php';
        ?>
    </head>
    <body id="page-top">
        <!-- Bagian Atas -->
        <?php
            $active = "alat"; 
            $header_title = "Fakta Menarik";
            $header_subtitle = "Halaman ini dapat memberikan fakta menarik seputar dunia astronomi secara acak";
            $header_image_credit = "Gambar oleh NASA | PIA25778: PREFIRE Satellite Illustration";
            $background_image_url = "/KosmosKita/assets/img/PIA25778\ PREFIRE\ Satellite\ Illustration.jpg";
            include '../../top.php';
        ?>

        <!-- Konten -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <div align="center">
                    <?php
                    // Sambung ke database
                    $conn = mysqli_connect("localhost", "kosp9197_root", "kosmoskita", "kosp9197_kosmoskita");

                    // Periksa koneksi
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Fetch fakta menarik acak dari database
                    $sql = "SELECT fact_text FROM fun_facts ORDER BY RAND() LIMIT 1";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        echo "<h4>" . $row['fact_text'] . "</h4><br>";
                    } else {
                        echo "<h4>No fun facts available.</h4><br>";
                    }

                    // Tutup koneksi
                    mysqli_close($conn);
                    ?>

                    <form action="faktamenarik.php" method="post">
                        <button type="submit" class="btn btn-lg btn-dark btn-block">Fakta Lain</button>
                    </form>
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