<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../../admin/login.php');
    exit;
}

include 'config.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $stmt = $conn->prepare("SELECT * FROM articles WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $article = $result->fetch_assoc();
    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_SESSION['username']; // Update author dari session
    $content = $_POST['content'];
    $image = NULL;

    if (!empty($_FILES['image']['tmp_name'])) {
        $image = file_get_contents($_FILES['image']['tmp_name']);
    }

    if ($image) {
        $stmt = $conn->prepare("UPDATE articles SET title = ?, author = ?, content = ?, image = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $title, $author, $content, $image, $id);
        $stmt->send_long_data(3, $image);
    } else {
        $stmt = $conn->prepare("UPDATE articles SET title = ?, author = ?, content = ? WHERE id = ?");
        $stmt->bind_param("sssi", $title, $author, $content, $id);
    }

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        header("Location: admin.php");
        exit;
    } else {
        echo "Error updating record: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "Kabar Astronomi - Ubah Artikel"; 
    include '../../head.php';
    ?>
    <!-- Include Quill library -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
</head>
<body id="page-top">
    <!-- Bagian Atas -->
    <?php
    $active = "admin"; 
    $header_title = "Kabar Astronomi";
    $header_subtitle = "Berita astronomi yang disajikan oleh pengelola situs AstronomiKu";
    $header_image_credit = "Gambar oleh NASA | PIA25778: PREFIRE Satellite Illustration";
    $background_image_url = "/KosmosKita/assets/img/PIA25778\ PREFIRE\ Satellite\ Illustration.jpg";
    include '../../top.php';
    ?>

    <!-- Konten -->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h1>Ubah Artikel</h1>
            <hr>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <br>
                    <br>
                    <h6>Silakan ubah informasi di bawah ini.</h6>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($article['id']) ?>">
                                    <p>Judul:</p>
                                    <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($article['title']) ?>" placeholder="Judul Artikel" required><br>
                                    <!-- <p>Penulis:</p>
                                    <input type="text" name="author" class="form-control" value="<?= htmlspecialchars($article['author']) ?>" placeholder="Penulis Artikel" required><br> -->
                                    <p>Konten:</p>
                                    <div id="editor" style="height: 200px;"></div>
                                    <input type="hidden" name="content" id="content">
                                    <br>
                                    <p>Gambar:</p>
                                    <input type="file" name="image"><br>
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
    $background_image_url = "/AstronomiKu/assets/img/PIA25434\ Orion\ Nebula\ in\ Infrared.jpg";
    include '../../bottom.php';
    ?>
    
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

        // Untuk populate editor dengan konten artikel
        var articleContent = <?= json_encode(htmlspecialchars_decode($article['content'])) ?>;
        quill.root.innerHTML = articleContent;

        // Untuk populate hidden input dengan Quill content sebelum pengumpulan form
        document.querySelector('form').onsubmit = function() {
            document.querySelector('input[name=content]').value = quill.root.innerHTML;
            return true;
        };
    </script>
</body>
</html>

<?php
$conn->close();
?>