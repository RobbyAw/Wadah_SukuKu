<?php session_start(); ?>
<?php
$conn = new mysqli("localhost", "root", "", "toko_sepatu");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wadah SukuKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-4xl font-bold">Wadah Suku</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="index.php" class="hover:underline">Beranda</a></li>
                    <li><a href="#produk" class="hover:underline">Produk</a></li>
                    <li><a href="#kontak" class="hover:underline">Kontak</a></li>
                    <?php if (isset($_SESSION['admin'])): ?>
                        <li><a href="admin.php" class="hover:underline">Dashboard</a></li>
                        <li><a href="logout.php" class="hover:underline">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php" class="hover:underline">Login Admin</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <section id="produk" class="py-10 px-4">
        <div class="container mx-auto">
            <h2 class="text-3xl text-center font-bold mb-5">Daftar Sepatu</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <?php
                $result = $conn->query("SELECT * FROM produk");
                while ($item = $result->fetch_assoc()):
                ?>
                    <div class="bg-white rounded shadow p-4">
                        <img src="gambar/<?php echo $item['gambar']; ?>" alt="<?php echo $item['nama']; ?>" class="w-full h-48 object-cover rounded mb-3">
                        <h3 class="text-lg font-bold mb-1"><?php echo $item['nama']; ?></h3>
                        <p class="text-blue-600 font-semibold mb-3">Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?></p>
                        <form method="POST" action="cara_pembayaran.php">
                            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                            <input type="hidden" name="nama" value="<?php echo $item['nama']; ?>">
                            <input type="hidden" name="harga" value="<?php echo $item['harga']; ?>">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Beli</button>
                        </form>
						<br>
						<form method="POST" action="detail_sepatu.php">
							<input type="hidden" name="id" value="<?php echo $item['id']; ?>">
						<button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Detail Sepatu</button>
						</form>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <footer id="kontak" class="bg-blue-500 text-white text-center py-4 mt-10">
        <p>&copy;RobbyAw 2025 <p class="font-bold mb-10">Wadah SukuKu</p></p>
		<div class="container-mx-auto">
   <div class="text-center mt-10">
  <h4 class="text-xl font-semibold mb-4">My Social Media</h4>

  <div class="flex justify-center items-center space-x-6">
    <!-- WhatsApp -->
    <a href="https://wa.me/qr/GF7Y7063NOWUL1" target="_blank"
       class="transform transition-transform duration-300 hover:scale-110">
      <img src="assets/images/wa.png"
           class="h-12 w-12">
    </a>

    <!-- Instagram -->
    <a href="https://www.instagram.com/robbyawaludin225?igsh=cml1OGtjOTZmN3M1&utm_source=qr" target="_blank"
       class="transform transition-transform duration-300 hover:scale-110">
      <img src="assets/images/ig.png"
           class="h-12 w-12">
    </a>
	
	<!-- Tiktok -->
	<a href="https://www.tiktok.com/@hajiudinnn?_t=ZS-8xhuckj3tua&_r=1" target="_blank"
       class="transform transition-transform duration-300 hover:scale-110">
      <img src="assets/images/tt.png"
           class="h-12 w-12">
    </a>
  </div>
</div>

    </footer>

</body>
</html>
