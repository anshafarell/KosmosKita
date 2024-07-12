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
            $title = "Fakta Menarik - Kelola Fakta"; 
            include '../../head.php';
        ?>
        <link href="../../css/faktamenarik.css" rel="stylesheet" />
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
                <div align="center">
                    <h1>Daftar Fakta Menarik</h1>
                    <br>
                    <!-- Dropdown untuk menampilkan hasil per halaman -->
                    <form method="get">
                        <label for="results_per_page">Jumlah fakta menarik per halaman:</label>
                        <select name="results_per_page" id="results_per_page">
                            <option value="5" <?php if((isset($_GET['results_per_page']) && $_GET['results_per_page'] == 5) || (!isset($_GET['results_per_page']))) echo 'selected'; ?>>5</option>
                            <option value="10" <?php if(isset($_GET['results_per_page']) && $_GET['results_per_page'] == 10) echo 'selected'; ?>>10</option>
                            <option value="20" <?php if(isset($_GET['results_per_page']) && $_GET['results_per_page'] == 20) echo 'selected'; ?>>20</option>
                            <option value="30" <?php if(isset($_GET['results_per_page']) && $_GET['results_per_page'] == 30) echo 'selected'; ?>>30</option>
                        </select>
                        <input type="submit" value="Tampilkan">
                    </form>
                    <br>
                    <table>
                        <tr>
                            <th style="text-align: center;">Fakta Menarik</th>
                            <th class="actions">Aksi</th>
                        </tr>
                        <?php
                        // Sambung ke database
                        $conn = mysqli_connect("localhost", "kosp9197_root", "kosmoskita", "kosp9197_kosmoskita");

                        // Periksa koneksi
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        // Set default results per page
                        // Atur hasil per halaman secara default
                        $results_per_page = 10;

                        // Periksa jika hasil per halaman sudah di-set di URL
                        if (isset($_GET['results_per_page'])) {
                            $results_per_page = $_GET['results_per_page'];
                        }

                        // Pagination
                        if (isset($_GET["page"])) {
                            $page = $_GET["page"];
                        } else {
                            $page = 1;
                        }
                        $start_from = ($page - 1) * $results_per_page;

                        // Fetch fakta menarik dari database, diurutkan berdasarkan ID secara descending
                        $sql = "SELECT * FROM fun_facts ORDER BY id DESC LIMIT $start_from, $results_per_page";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // Menampilkan fakta menarik
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['fact_text'] . "</td>";
                                echo "<td class='actions'>
                                        <form action='edit_fact.php' method='get'>
                                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                                            <button type='submit'>Ubah</button>
                                        </form>
                                        <form action='delete_fact.php' method='get'>
                                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                                            <button type='submit'>Hapus</button>
                                        </form>
                                    </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='2'>Tidak ada fakta menarik.</td></tr>";
                        }

                        // Tutup koneksi
                        mysqli_close($conn);
                        ?>
                    </table>

                    <!-- Pagination links -->
                    <?php
                    $conn = mysqli_connect("localhost", "kosp9197_root", "kosmoskita", "kosp9197_kosmoskita");
                    $sql = "SELECT COUNT(id) AS total FROM fun_facts";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $total_pages = ceil($row["total"] / $results_per_page);

                    for ($i = 1; $i <= $total_pages; $i++) {
                        echo "<a href='fun_facts.php?page=" . $i . "&results_per_page=" . $results_per_page . "'>" . $i . "</a> ";
                    }

                    // Tutup koneksi
                    mysqli_close($conn);
                    ?>

                    <br><br>
                    <form action="add_fact.php" method="get">
                        <button type="submit" class="btn btn-lg btn-dark btn-block">Tambah Fakta Menarik</button>
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
