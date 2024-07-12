<?php
// Memeriksa jika ID sudah di-set pada GET request
if (isset($_GET['id'])) {
    // Mendapatkan ID
    $fact_id = $_GET['id'];

    // Sambung ke database
    $conn = mysqli_connect("localhost", "kosp9197_root", "kosmoskita", "kosp9197_kosmoskita");

    // Periksa koneksi
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Hapus fakta menarik dari database
    $sql = "DELETE FROM fun_facts WHERE id=$fact_id";
    if (mysqli_query($conn, $sql)) {
        // Tutup koneksi sebelum redirect
        mysqli_close($conn);
        // Redirect ke fun_facts.php
        header("Location: fun_facts.php");
        exit();
    } else {
        // Tangani kesalahan sebelum output
        $error_message = "Error deleting fun fact: " . mysqli_error($conn);
        // Tutup koneksi
        mysqli_close($conn);
        // Redirect dengan pesan kesalahan (opsional, jika ingin menampilkan kesalahan)
        header("Location: fun_facts.php?error=" . urlencode($error_message));
        exit();
    }
} else {
    // Redirect ke fun_facts.php jika diakses secara langsung tanpa ID
    header("Location: fun_facts.php");
    exit();
}