<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Produk Kacamata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Koleksi Kacamata</h2>

    <div class="text-center mb-4">
        <a href="tambah.php" class="btn btn-success">Tambah Produk</a>
    </div>

    <div class="row">
        <?php
        $data = mysqli_query($conn, "SELECT * FROM produk");
        while($row = mysqli_fetch_assoc($data)){
        ?>

        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 rounded-4">
                <div class="card-body p-4">
                    <h5 class="fw-bold"><?= $row['nama']; ?></h5>
                    <p><?= $row['deskripsi']; ?></p>
                    <p><strong>Harga:</strong> Rp <?= $row['harga']; ?></p>
                    <p><strong>Stok:</strong> <?= $row['stok']; ?></p>

                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
</div>

</body>
</html>