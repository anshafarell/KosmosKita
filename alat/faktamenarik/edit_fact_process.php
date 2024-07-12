<?php
// Memeriksa jika form dikumpulkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa jika ID dan fact_text sudah di-set dan tidak kosong/empty
    if (isset($_POST["id"]) && isset($_POST["fact_text"]) && !empty($_POST["fact_text"])) {
        // Untuk sanitize input
        $fact_id = $_POST["id"];
        $fact_text = htmlspecialchars($_POST["fact_text"]);

        // Sambung ke database
        $conn = mysqli_connect("localhost", "kosp9197_root", "kosmoskita", "kosp9197_kosmoskita");

        // Periksa koneksi
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Update/ubah fakta menarik di database
        $sql = "UPDATE fun_facts SET fact_text='$fact_text' WHERE id=$fact_id";
        if (mysqli_query($conn, $sql)) {
            // Tutup koneksi sebelum redirect
            mysqli_close($conn);
            // Redirect ke fun_facts.php
            header("Location: fun_facts.php");
            exit();
        } else {
            echo "Error updating fun fact: " . mysqli_error($conn);
            // Tutup koneksi
            mysqli_close($conn);
        }
    } else {
        echo "ID and Fun fact text are required.";
    }
} else {
    // Redirect kembali ke edit_fact.php jika diakses secara langsung
    header("Location: edit_fact.php");
    exit();
}
?>