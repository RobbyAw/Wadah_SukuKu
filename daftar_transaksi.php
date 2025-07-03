<?php
$conn = new mysqli("localhost", "root", "", "toko_sepatu");
$result = $conn->query("SELECT * FROM transaksi");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Transaksi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
  <div class="container mx-auto p-6">
    <h2 class="text-3xl font-bold text-center text-blue-700 mb-6">Daftar Transaksi</h2>

    <div class="overflow-x-auto shadow rounded-lg bg-white">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-blue-600 text-white">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">ID</th>
            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Nama Produk</th>
            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Harga</th>
            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Tanggal Transaksi</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <?php while($row = $result->fetch_assoc()): ?>
            <tr class="hover:bg-gray-100 transition">
              <td class="px-6 py-4 whitespace-nowrap"><?= $row['id'] ?></td>
              <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($row['nama_produk']) ?></td>
              <td class="px-6 py-4 whitespace-nowrap">Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
              <td class="px-6 py-4 whitespace-nowrap"><?= $row['tanggal_transaksi'] ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
