<?php
// Memeriksa apakah form dikumpulkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa jika fact_text sudah di-set dan tidak empty/kosong
    if (isset($_POST["fact_text"]) && !empty($_POST["fact_text"])) {
        // Untuk sanitize input
        $fact_text = htmlspecialchars($_POST["fact_text"]);

        // Sambung ke database
        $conn = mysqli_connect("localhost", "kosp9197_root", "kosmoskita", "kosp9197_kosmoskita");

        // Memeriksa koneksi
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Memasukkan fakta menarik baru ke database
        $sql = "INSERT INTO fun_facts (fact_text) VALUES ('$fact_text')";
        if (mysqli_query($conn, $sql)) {
            // Menutup koneksi sebelum redirect
            mysqli_close($conn);
            // Redirect ke fun_facts.php
            header("Location: fun_facts.php");
            exit();
        } else {
            echo "Error adding fun fact: " . mysqli_error($conn);
            // Menutup koneksi
            mysqli_close($conn);
        }
    } else {
        echo "Fun fact text is required.";
    }
} else {
    // Redirect kembali ke add_fact.php jika diakses secara langsung
    header("Location: add_fact.php");
    exit();
}
?>