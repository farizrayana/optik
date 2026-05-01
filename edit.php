<?php
include 'config.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM produk WHERE id='$id'");
$d = mysqli_fetch_assoc($data);

if(isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($conn, "UPDATE produk SET
        nama='$nama',
        harga='$harga',
        stok='$stok',
        deskripsi='$deskripsi'
        WHERE id='$id'");

    header("Location: produk.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card shadow border-0 rounded-4 p-4">
        <h2 class="mb-4">Edit Produk</h2>

        <form method="POST">
            <div class="mb-3">
                <label>Nama Produk</label>
                <input type="text" name="nama" class="form-control" value="<?= $d['nama']; ?>" required>
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" value="<?= $d['harga']; ?>" required>
            </div>

            <div class="mb-3">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" value="<?= $d['stok']; ?>" required>
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" required><?= $d['deskripsi']; ?></textarea>
            </div>

            <button type="submit" name="update" class="btn btn-warning">Update</button>
            <a href="produk.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
</body>
</html>