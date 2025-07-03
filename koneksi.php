<?php include 'koneksi.php'; ?>

<section id="produk" class="p-6 bg-gray-50">
  <h2 class="text-xl font-semibold mb-4">Daftar Sepatu</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <?php
    $query = "SELECT * FROM produk";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($produk = $result->fetch_assoc()) {
    ?>
      <div class="bg-white p-4 shadow rounded">
        <img src="gambar/<?php echo $produk['gambar']; ?>" class="w-full h-48 object-cover rounded mb-2" alt="<?php echo $produk['nama']; ?>">
        <h3 class="text-lg font-bold"><?php echo $produk['nama']; ?></h3>
        <p class="text-blue-600 font-semibold">Rp <?php echo number_format($produk['harga'], 0, ',', '.'); ?></p>
      </div>
    <?php
        }
    } else {
        echo "<p>Tidak ada produk ditemukan.</p>";
    }
    ?>

  </div>
</section>
