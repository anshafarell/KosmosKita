<?php
$servername = "localhost";
$username = "kosp9197_root";
$password = "kosmoskita";
$dbname = "kosp9197_kosmoskita";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
