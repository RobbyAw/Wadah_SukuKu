<?php
$conn = new mysqli("localhost", "root", "", "toko_sepatu");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap ID produk dari POST
if (!isset($_POST['id'])) {
    echo "<script>alert('Produk tidak ditemukan.'); window.location='index.php';</script>";
    exit;
}

$id = $_POST['id'];

// Ambil detail produk
$stmt = $conn->prepare("SELECT * FROM produk WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$produk = $result->fetch_assoc();

if (!$produk) {
    echo "<script>alert('Produk tidak ditemukan.'); window.location='index.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Sepatu - <?= htmlspecialchars($produk['nama']) ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <div class="max-w-3xl mx-auto p-6 mt-10 bg-white shadow-md rounded-xl">
    <div class="flex flex-col md:flex-row gap-6">
      <img src="gambar/<?= htmlspecialchars($produk['gambar']) ?>" alt="<?= htmlspecialchars($produk['nama']) ?>" class="w-full md:w-1/2 h-64 object-cover rounded-lg">
      
      <div class="md:w-1/2">
        <h2 class="text-2xl font-bold mb-2"><?= htmlspecialchars($produk['nama']) ?></h2>
        <p class="text-blue-600 font-semibold text-xl mb-4">Rp <?= number_format($produk['harga'], 0, ',', '.') ?></p>
        
        <?php if (!empty($produk['deskripsi'])): ?>
          <p class="text-gray-700 mb-4"><?= nl2br(htmlspecialchars($produk['deskripsi'])) ?></p>
        <?php else: ?>
          <p class="text-gray-500 mb-4 italic">Tidak ada deskripsi tersedia.</p>
        <?php endif; ?>

        <form method="POST" action="cara_pembayaran.php" class="mb-3">
          <input type="hidden" name="id" value="<?= $produk['id'] ?>">
          <input type="hidden" name="nama" value="<?= htmlspecialchars($produk['nama']) ?>">
          <input type="hidden" name="harga" value="<?= $produk['harga'] ?>">
          <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Beli Sekarang</button>
        </form>

        <a href="index.php" class="text-blue-600 hover:underline">← Kembali ke Beranda</a>
      </div>
    </div>
  </div>

</body>
</html>
