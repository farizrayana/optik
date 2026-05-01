
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optik Maroon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }

        .hero {
            background: linear-gradient(to right, #0d6efd, #0a58ca);
            color: white;
            padding: 90px 0;
            border-radius: 24px;
        }

        .feature-card {
            border: none;
            border-radius: 18px;
            transition: 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-6px);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">👓 Optik Maroon</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="produk.php">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="hero text-center shadow">
        <h1 class="display-4 fw-bold">Kacamata Stylish & Berkualitas</h1>
        <p class="lead mt-3">Pilihan terbaik untuk gaya hidup modern Anda</p>
        <a href="produk.php" class="btn btn-light btn-lg mt-3">Lihat Produk</a>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center mb-4">Kenapa Memilih Kami?</h2>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card feature-card shadow p-4 text-center">
                <h4>✨ Premium Quality</h4>
                <p>Frame berkualitas tinggi dan desain elegan.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card feature-card shadow p-4 text-center">
                <h4>🚚 Fast Delivery</h4>
                <p>Pengiriman cepat dan aman ke seluruh Indonesia.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card feature-card shadow p-4 text-center">
                <h4>💙 Best Service</h4>
                <p>Pelayanan terbaik dan konsultasi ramah.</p>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center p-4 mt-5">
    © 2026 Optik Maroon | UTP Teknologi Web
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>