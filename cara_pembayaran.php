<?php
$nama = $_POST['nama'];
$harga = $_POST['harga'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Cara Pembayaran</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <div class="max-w-xl mx-auto p-6 mt-10 bg-white shadow-md rounded-xl">
    <h2 class="text-2xl font-bold text-blue-700 mb-4 text-center">Konfirmasi & Cara Pembayaran</h2>
    
    <div class="mb-6">
      <p class="text-lg"><strong>Nama Produk:</strong> <?= htmlspecialchars($nama) ?></p>
      <p class="text-lg"><strong>Harga:</strong> Rp <?= number_format($harga, 0, ',', '.') ?></p>
    </div>

    <div class="bg-blue-50 border-l-4 border-blue-400 p-4 mb-6">
      <p class="font-semibold text-blue-700">Silakan transfer ke rekening berikut:</p>
      <ul class="list-disc ml-6 text-sm mt-2 text-blue-700">
        <li>BCA - 123456789 a.n. Toko Sepatu</li>
        <li>Setelah transfer, klik tombol “Setujui Pembayaran” di bawah.</li>
      </ul>
    </div>

    <form action="proses_pembayaran.php" method="POST">
      <input type="hidden" name="nama" value="<?= htmlspecialchars($nama) ?>">
      <input type="hidden" name="harga" value="<?= $harga ?>">
      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Setujui Pembayaran</button>
    </form>
  </div>
</body>
</html>
