<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "ylnj-project");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passion.cloth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap' rel='stylesheet'>
    <style>
        /* Body Styling */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        /* Banner Section */
        .big-banner {
            background: url('./Image/banner.jpg') no-repeat center center/cover;
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;
        }
        .big-banner h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        /* Navbar Styling */
        .menu {
            position: absolute;
            top: 20px;
            width: 100%;
            padding: 10px;
        }
        .menu .logo h1 {
            font-size: 2rem;
            color: white;
        }
        .menu .menulist {
            display: flex;
            justify-content: flex-end;
        }
        .menu .menulist a {
            color: white;
            font-size: 1.1rem;
            margin-left: 20px;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .menu .menulist a:hover {
            color: #007bff;
        }
        
        /* Buttons */
        .btn-register {
            background-color: #007bff;
            color: white;
            padding: 12px 24px;
            font-size: 1.2rem;
            border-radius: 25px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin: 10px;
        }
        .btn-register:hover {
            background-color: #0056b3;
        }
        
        /* Feature Section */
        .feature {
            padding: 60px 0;
            background-color: #fff;
        }
        .feature .box {
            display: flex;
            justify-content: space-around;
            gap: 20px;
        }
        .feature .col-3 {
            background-color: #ffffff;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature .col-3:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .feature .col-3 img {
            max-width: 80px;
            margin-bottom: 20px;
        }
        .feature .col-3 h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #007bff;
        }
        .feature .col-3 p {
            font-size: 1rem;
            color: #666;
        }
        
    </style>
</head>
<body>

<!-- Big Banner -->
<div class="big-banner">
    <div class="menu">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <h1>DaisyShop</h1>
            </div>
            <div class="menulist">
                <a href="#">Home</a>
                <a href="index.php">Produk</a>
                <a href="#">Contact</a>
            </div>
        </div>
    </div>
    <div class="banner-text">
        <h1>Welcome to DaisyShop</h1>
        <a href="login.php" class="btn-register">Sign In</a><br><br><br>
        <a href="daftar.php" class="btn-register">Sign Up</a>
    </div>

</div>
<!-- End Big Banner -->

<!-- Feature Section -->
<div class="feature">
    <div class="container">
        <div class="box">
            <div class="col-3">
                <img src="Image/donation%20(1).png" alt="Pembayaran">
                <h3>Pembayaran</h3>
                <p>Kamu bisa membayar melalui transfer bank</p>
            </div>
            <div class="col-3">
                <img src="Image/clothes-donation.png" alt="Kualitas Baju">
                <h3>Kualitas Baju</h3>
                <p>Bagus, Nyaman, Harga merakyat</p>
            </div>
            <div class="col-3">
                <img src="Image/donation%20(2).png" alt="Donasi Makanan">
                <h3>Donasi Makanan</h3>
                <p>Berbagi itu indah</p>
            </div>
        </div>
    </div>
</div>
<!-- End Feature Section -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
