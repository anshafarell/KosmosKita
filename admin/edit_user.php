<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

include 'db.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("UPDATE users SET username=?, full_name=?, email=? WHERE id=?");
    $stmt->bind_param("sssi", $username, $full_name, $email, $id);

    if ($stmt->execute()) {
        header('Location: users.php');
        exit;
    } else {
        echo "Error updating record: " . $stmt->error;
    }
    $stmt->close();
}

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $title = "Admin - Ubah Data"; 
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
                <h1>Ubah Data Admin</h1>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <br>
                        <br>
                        <h6>Silakan ubah informasi yang diperlukan di bawah ini.</h6>
                        <form method="POST" action="">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">
                                        <p>Username:</p>
                                        <input type="text" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" class="form-control" placeholder="Username" required><br>
                                        <p>Nama Lengkap:</p>
                                        <input type="text" name="full_name" value="<?php echo htmlspecialchars($user['full_name']); ?>" class="form-control" placeholder="Nama Lengkap" required><br>
                                        <p>Alamat Email:</p>
                                        <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" class="form-control" placeholder="Alamat Email" required><br>
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