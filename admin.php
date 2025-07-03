<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "toko_sepatu");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data produk dan transaksi
$produk_result = $conn->query("SELECT * FROM produk ORDER BY id DESC");
$transaksi_result = $conn->query("SELECT * FROM transaksi ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - Toko Sepatu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <header class="bg-blue-700 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Dashboard Admin</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="index.php" class="hover:underline">Beranda</a></li>
                    <li><a href="logout.php" class="hover:underline">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-10 px-4">

        <!-- Produk Section -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">Daftar Produk</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border rounded shadow">
                    <thead class="bg-blue-100">
                        <tr>
                            <th class="py-2 px-4 border">ID</th>
                            <th class="py-2 px-4 border">Nama</th>
                            <th class="py-2 px-4 border">Harga</th>
                            <th class="py-2 px-4 border">Deskripsi</th>
                            <th class="py-2 px-4 border">Gambar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($produk = $produk_result->fetch_assoc()): ?>
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border"><?= $produk['id'] ?></td>
                                <td class="py-2 px-4 border"><?= htmlspecialchars($produk['nama']) ?></td>
                                <td class="py-2 px-4 border">Rp <?= number_format($produk['harga'], 0, ',', '.') ?></td>
                                <td class="py-2 px-4 border"><?= htmlspecialchars($produk['deskripsi']) ?></td>
                                <td class="py-2 px-4 border">
                                    <img src="gambar/<?= $produk['gambar'] ?>" class="h-16 rounded" alt="<?= $produk['nama'] ?>">
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Transaksi Section -->
        <section>
            <h2 class="text-2xl font-semibold mb-4">Riwayat Transaksi</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border rounded shadow">
                    <thead class="bg-blue-100">
                        <tr>
                            <th class="py-2 px-4 border">ID</th>
                            <th class="py-2 px-4 border">Nama Produk</th>
                            <th class="py-2 px-4 border">Harga</th>
                            <th class="py-2 px-4 border">Tanggal Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($transaksi = $transaksi_result->fetch_assoc()): ?>
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border"><?= $transaksi['id'] ?></td>
                                <td class="py-2 px-4 border"><?= htmlspecialchars($transaksi['nama_produk']) ?></td>
                                <td class="py-2 px-4 border">Rp <?= number_format($transaksi['harga'], 0, ',', '.') ?></td>
                                <td class="py-2 px-4 border"><?= $transaksi['tanggal_transaksi'] ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </section>

    </main>

</body>
</html>
