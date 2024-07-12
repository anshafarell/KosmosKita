<?php
include 'config.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$articles_per_page = isset($_GET['articles_per_page']) ? (int)$_GET['articles_per_page'] : 10;
$offset = ($page - 1) * $articles_per_page;

$total_articles_sql = "SELECT COUNT(*) as count FROM articles WHERE title LIKE '%$search%' OR author LIKE '%$search%' OR content LIKE '%$search%'";
$total_articles_result = $conn->query($total_articles_sql);
$total_articles_row = $total_articles_result->fetch_assoc();
$total_articles = $total_articles_row['count'];

$total_pages = ceil($total_articles / $articles_per_page);

$sql = "SELECT id, title, author, submitted_time, last_edited_time, content, IF(image IS NULL, 0, 1) AS has_image 
        FROM articles 
        WHERE title LIKE '%$search%' OR author LIKE '%$search%' OR content LIKE '%$search%'
        ORDER BY last_edited_time DESC 
        LIMIT $offset, $articles_per_page";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Kabar Astronomi"; 
            include '../../head.php';
        ?>
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
                <h1>Daftar Artikel</h1>
                <hr>
                <form method="GET" action="kabarastronomi.php">
                    <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="Masukkan kata kunci">
                    <input type="hidden" name="articles_per_page" value="<?= $articles_per_page ?>">
                    <button type="submit">Cari</button>
                </form>
                <hr>
                <form method="GET" action="kabarastronomi.php">
                    <label for="articles_per_page">Jumlah artikel per halaman:</label>
                    <select id="articles_per_page" name="articles_per_page" onchange="this.form.submit()">
                        <option value="10" <?= $articles_per_page == 10 ? 'selected' : '' ?>>10</option>
                        <option value="20" <?= $articles_per_page == 20 ? 'selected' : '' ?>>20</option>
                        <option value="30" <?= $articles_per_page == 30 ? 'selected' : '' ?>>30</option>
                    </select>
                    <input type="hidden" name="search" value="<?= htmlspecialchars($search) ?>">
                    <input type="hidden" name="page" value="<?= $page ?>">
                </form>
                <br>
                <ul style="list-style-type: none; padding: 0;">
                    <?php while($row = $result->fetch_assoc()): 
                        // Membuat sebuah snippet plain text
                        $content = $row['content'];
                        $content = str_replace('</', ' </', $content); // Memastikan spaces sebelum closing tags
                        $content = strip_tags($content); // Menghilangkan HTML tags
                        $content = preg_replace('/\s+/', ' ', $content); // Mengganti multiple spaces dengan sebuah single space
                        $snippet = substr(trim($content), 0, 100); // Membatasi snippet sebanyak 100 karakter
                    ?>
                    <li style="margin-bottom: 20px; display: flex; align-items: center;">
                        <div class="thumbnail" style="width: 100px; height: 100px; background-color: grey; margin-right: 10px;">
                            <?php if ($row['has_image']): ?>
                                <img src="image.php?id=<?= $row['id'] ?>" alt="thumbnail" style="width: 100px; height: 100px;">
                            <?php endif; ?>
                        </div>
                        <div>
                            <h2 style="margin: 0;"><?= $row['title'] ?></h2>
                            <p style="margin: 5px 0;">Oleh <?= $row['author'] ?> pada <?= $row['submitted_time'] ?> (Terakhir diubah: <?= $row['last_edited_time'] ?>)</p>
                            <p style="margin: 5px 0;"><?= $snippet ?>...</p>
                            <a href="view.php?id=<?= $row['id'] ?>">Baca selengkapnya</a>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <div>
                    <?php if ($page > 1): ?>
                        <a href="?page=<?= $page - 1 ?>&articles_per_page=<?= $articles_per_page ?>&search=<?= htmlspecialchars($search) ?>">Sebelumnya</a>
                    <?php endif; ?>
                    
                    Halaman ke-<?= $page ?> dari <?= $total_pages ?>
                    
                    <?php if ($page < $total_pages): ?>
                        <a href="?page=<?= $page + 1 ?>&articles_per_page=<?= $articles_per_page ?>&search=<?= htmlspecialchars($search) ?>">Selanjutnya</a>
                    <?php endif; ?>
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
