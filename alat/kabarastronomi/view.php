<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM articles WHERE id = $id";
    $result = $conn->query($sql);
    $article = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Kabar Astronomi"; 
            include '../../head.php';
        ?>
        <link href="/KosmosKita/css/kabarastronomi.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Bagian Atas -->
        <?php
            $active = "alat"; 
            $header_title = "Kabar Astronomi";
            $header_subtitle = "Berita astronomi yang disajikan oleh pengelola situs KosmosKita";
            $header_image_credit = "Gambar oleh NASA | PIA25778: PREFIRE Satellite Illustration";
            $background_image_url = "/KosmosKita/assets/img/PIA25778\ PREFIRE\ Satellite\ Illustration.jpg";
            include '../../top.php';
        ?>

        <!-- Konten -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <div class="article-header">
                    <h1><?= $article['title'] ?></h1>
                    <p>Oleh <?= $article['author'] ?> pada <?= $article['submitted_time'] ?> (Terakhir diubah: <?= $article['last_edited_time'] ?>)</p>
                    <?php if ($article['image']): ?>
                        <img src="image.php?id=<?= $article['id'] ?>" alt="Article Image" class="article-image">
                    <?php endif; ?>
                </div>
                <div class="article-content">
                    <p><?= nl2br($article['content']) ?></p>
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

<?php
$conn->close();
?>