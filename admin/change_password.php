<?php
session_start();
require 'db.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_password = md5($_POST['new_password']);
    $username = $_SESSION['username'];
    $sql = "UPDATE users SET password='$new_password' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $message = "Password berhasil diubah!";
    } else {
        $error = "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $title = "Admin - Ubah Password"; 
            include '../head.php';
        ?>
    </head>
    <body>
        <!-- Bagian Atas -->
        <?php
            $active = "admin"; 
            $header_title = "Ubah Password";
            $header_subtitle = "Halaman ini berfungsi untuk mengubah password akun admin";
            $header_image_credit = "Gambar oleh NASA | PIA25778: PREFIRE Satellite Illustration";
            $background_image_url = "/KosmosKita/assets/img/PIA25778\ PREFIRE\ Satellite\ Illustration.jpg";
            include '../top.php';
        ?>

        <!-- Konten -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <h1>Ubah Password</h1>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <br>
                        <br>
                        <h6>Silakan masukkan password baru pada kolom yang tersedia di bawah ini.</h6>
                        <form method="post" action="">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="password" name="new_password" id="new_password" class="form-control" placeholder="Password Baru" required>
                                        <br>
                                        <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility()"> Tampilkan Password
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-lg btn-dark btn-block">Ubah Password</button>
                        </form>
                        <br>
                        <a href="user_page.php" style="text-decoration: none; font-size:x-large;">Kembali ke halaman Admin</a>
                        <?php if (isset($message)) { echo "<br><br><p>$message</p>"; } ?>
                        <?php if (isset($error)) { echo "<br><br><p>$error</p>"; } ?>
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
            include '../bottom.php';
        ?>

        <script>
            function togglePasswordVisibility() {
                var passwordField = document.getElementById("new_password");
                if (passwordField.type === "password") {
                    passwordField.type = "text";
                } else {
                    passwordField.type = "password";
                }
            }
        </script>
    </body>
</html>