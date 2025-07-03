<?php
$conn = new mysqli("localhost", "root", "", "toko_sepatu");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $stmt = $conn->prepare("INSERT INTO transaksi (nama_produk, harga) VALUES (?, ?)");
    $stmt->bind_param("si", $nama, $harga);
    $stmt->execute();

    echo "<script>alert('Pembayaran dan pembelian berhasil!'); window.location='index.php';</script>";
}
?>
