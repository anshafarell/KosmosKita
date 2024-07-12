<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("INSERT INTO users (username, password, full_name, email) VALUES (?, ?, ?, ?)");
    $password_hashed = md5($password);
    $stmt->bind_param("ssss", $username, $password_hashed, $full_name, $email);

    if ($stmt->execute()) {
        header("Location: users.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "Admin - Tambah Admin";
    include '../head.php';
    ?>
</head>
<body>
    <!-- Bagian Atas -->
    <?php
    $active = "admin";
    $header_title = "Ubah Data";
    $header_subtitle = "Halaman ini berfungsi untuk mengubah data akun admin";
    $header_image_credit = "Gambar oleh NASA | PIA25778: PREFIRE Satellite Illustration";
    $background_image_url = "/KosmosKita/assets/img/PIA25778\ PREFIRE\ Satellite\ Illustration.jpg";
    include '../top.php';
    ?>

    <!-- Konten -->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h1>Tambah Admin KosmosKita</h1>
            <hr>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <br><br>
                    <h6>Silakan isi informasi admin baru di bawah ini.</h6>
                    <form method="POST" action="">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <p>Username:</p>
                                    <input type="text" name="username" class="form-control" placeholder="Username" required><br>
                                    <p>Password:</p>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required><br>
                                    <p>Nama Lengkap:</p>
                                    <input type="text" name="full_name" class="form-control" placeholder="Nama Lengkap" required><br>
                                    <p>Alamat Email:</p>
                                    <input type="email" name="email" class="form-control" placeholder="Alamat Email" required><br>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-lg btn-dark btn-block">Simpan Perubahan</button>
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
    include '../bottom.php';
    ?>
</body>
</html>
