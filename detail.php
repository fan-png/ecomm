<?php session_start(); ?>
<?php $koneksi = new mysqli("localhost", "root", "", "ylnj-project"); ?>
<?php
$id_produk = $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$detail = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .product-image {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .product-detail {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
    </style>
</head>
<body>
<?php include 'menu.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Image Section -->
            <div class="col-md-6">
                <img src="foto_produk/<?php echo $detail["foto_produk"]; ?>" alt="<?php echo $detail["nama_produk"]; ?>" class="product-image img-fluid">
            </div>
            <!-- Details Section -->
            <div class="col-md-6">
                <div class="product-detail">
                    <h1 class="mb-3"><?php echo $detail["nama_produk"]; ?></h1>
                    <h4 class="text-success mb-3">Rp. <?php echo number_format($detail["harga_produk"]); ?></h4>
                    <form method="post">
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <div class="input-group">
                                <input type="number" id="jumlah" name="jumlah" class="form-control" min="1" value="1">
                                <button class="btn btn-primary" name="beli"><i class="fas fa-shopping-cart"></i> Beli</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST["beli"])) {
                        $jumlah = $_POST["jumlah"];
                        $_SESSION["keranjang"][$id_produk] = $jumlah;
                        echo "<script>alert('Produk telah masuk ke keranjang belanja');</script>";
                        echo "<script>location = 'keranjang.php';</script>";
                    }
                    ?>
                    <p class="mt-4"><?php echo $detail["deskripsi_produk"]; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
