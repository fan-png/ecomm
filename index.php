<?php
session_start();
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "ylnj-project");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YLNJ-Branded</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .product-card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product-card img {
            border-radius: 10px;
        }
    </style>
</head>
<body>
<?php include 'menu.php'; ?>

<!-- Konten -->
<section class="py-5">
    <div class="container">
        <h1 class="text-center mb-5">Produk Terbaru</h1>
        <div class="row">
            <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
            <?php while ($perproduk = $ambil->fetch_assoc()) { ?>
                <div class="col-md-3 mb-4">
                    <div class="card product-card">
                        <img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" class="card-img-top img-fluid" alt="<?php echo $perproduk['nama_produk']; ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $perproduk['nama_produk']; ?></h5>
                            <p class="text-muted">Rp. <?php echo number_format($perproduk['harga_produk']); ?></p>
                            <a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary w-100 mb-2">Beli</a>
                            <a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-outline-secondary w-100">Detail</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
