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
            $title = "Fakta Menarik - Ubah Fakta"; 
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
                <h1>Ubah Fakta Menarik</h1>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <br>
                        <br>
                        <h6>Silakan ubah fakta menarik dengan mengisi kolom di bawah ini.</h6>
                        <?php
                        // Sambung ke database
                        $conn = mysqli_connect("localhost", "kosp9197_root", "kosmoskita", "kosp9197_kosmoskita");

                        // Periksa koneksi
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        // Memeriksa jika ID paramater di-passed
                        if (isset($_GET['id'])) {
                            $fact_id = $_GET['id'];

                            // Fetch fakta menarik dari database
                            $sql = "SELECT * FROM fun_facts WHERE id = $fact_id";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                $fact_text = $row['fact_text'];

                                // Menampilkan form dengan fakta menarik saat ini
                                echo "<form action='edit_fact_process.php' method='post'>";
                                echo "<div class='form-group'>";
                                echo "<div class='form-row'>";
                                echo "<div class='col'>";
                                echo "<input type='hidden' name='id' value='$fact_id'>";
                                echo "<textarea name='fact_text' class='form-control' rows='4' cols='50'>$fact_text</textarea><br><br>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "<button type='submit' class='btn btn-lg btn-dark btn-block'>Ubah Fakta Menarik</button>";
                                echo "</form>";
                            } else {
                                echo "Fun fact not found.";
                            }
                        } else {
                            echo "ID parameter is missing.";
                        }

                        // Tutup koneksi
                        mysqli_close($conn);
                        ?>
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
