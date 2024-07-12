<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Kelola Admin"; 
            include '../head.php';
        ?>
    </head>
    <body id="page-top">
        <!-- Bagian Atas -->
        <?php
            $active = "admin"; 
            $header_title = "Kelola Admin";
            $header_subtitle = "Halaman ini berfungsi untuk mengelola admin, yaitu pengelola situs web KosmosKita";
            $header_image_credit = "Gambar oleh NASA | PIA25778: PREFIRE Satellite Illustration";
            $background_image_url = "/KosmosKita/assets/img/PIA25778\ PREFIRE\ Satellite\ Illustration.jpg";
            include '../top.php';
        ?>

        <!-- Konten -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <?php
                // Untuk meng-include file koneksi database
                include 'db.php';

                // Inisialisasi variabel
                $limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;
                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $search = isset($_GET['search']) ? $_GET['search'] : '';
                $offset = ($page - 1) * $limit;

                // Menghitung total record dengan filter pencarian
                $sql_count = "SELECT COUNT(*) AS total FROM users WHERE username LIKE '%$search%' OR full_name LIKE '%$search%' OR email LIKE '%$search%'";
                $result_count = $conn->query($sql_count);
                $total_records = $result_count->fetch_assoc()['total'];
                $total_pages = ceil($total_records / $limit);

                // Untuk fetch record dengan pagination dan filter pencarian
                $sql = "SELECT * FROM users WHERE username LIKE '%$search%' OR full_name LIKE '%$search%' OR email LIKE '%$search%' LIMIT $offset, $limit";
                $result = $conn->query($sql);
                ?>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <form method="GET" action="">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Masukkan kata kunci" value="<?php echo htmlspecialchars($search); ?>">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 offset-md-4 text-end">
                        <form method="GET" action="">
                            <label for="limit">Tampilkan</label>
                            <select name="limit" id="limit" class="form-select" onchange="this.form.submit()">
                                <option value="10" <?php if ($limit == 10) echo 'selected'; ?>>10</option>
                                <option value="20" <?php if ($limit == 20) echo 'selected'; ?>>20</option>
                                <option value="30" <?php if ($limit == 30) echo 'selected'; ?>>30</option>
                            </select>
                            <input type="hidden" name="search" value="<?php echo htmlspecialchars($search); ?>">
                        </form>
                    </div>
                </div>

                <div class="mb-3">
                    <a href="add_user.php" class="btn btn-success">Tambah Admin</a>
                </div>

                <div style="width: 100%; overflow-x: auto;">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat Email</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <!-- <td><?php echo $row['id']; ?></td> -->
                                <td><?php echo htmlspecialchars($row['username']); ?></td>
                                <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td>
                                    <a href="edit_user.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Ubah</a>
                                    <a href="delete_user.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Hapus</a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>

                <nav>
                    <ul class="pagination justify-content-center">
                        <?php if ($page > 1): ?>
                        <li class="page-item"><a class="page-link" href="?limit=<?php echo $limit; ?>&search=<?php echo htmlspecialchars($search); ?>&page=<?php echo $page - 1; ?>">Previous</a></li>
                        <?php endif; ?>
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?php if ($page == $i) echo 'active'; ?>"><a class="page-link" href="?limit=<?php echo $limit; ?>&search=<?php echo htmlspecialchars($search); ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                        <?php if ($page < $total_pages): ?>
                        <li class="page-item"><a class="page-link" href="?limit=<?php echo $limit; ?>&search=<?php echo htmlspecialchars($search); ?>&page=<?php echo $page + 1; ?>">Next</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <?php
                $conn->close();
                ?>
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
