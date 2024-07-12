<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM articles WHERE id = $id";
    $conn->query($sql);
    header("Location: admin.php");
}

$conn->close();
?>
