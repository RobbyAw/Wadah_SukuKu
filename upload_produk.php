<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
$conn = new mysqli("localhost", "root", "", "toko_sepatu");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp, "images/$gambar");
    $conn->query("INSERT INTO sepatu (nama, harga, gambar) VALUES ('$nama', $harga, '$gambar')");
    header("Location: admin.php");
}
?>