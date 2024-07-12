<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT image FROM articles WHERE id = $id";
    $result = $conn->query($sql);
    $article = $result->fetch_assoc();
    header("Content-type: image/jpeg");
    echo $article['image'];
}

$conn->close();
?>
