<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    die();
}
require '../../../db/koneksi.php';

// Fetch product data based on ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM produk WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        echo "<script>alert('Produk tidak ditemukan'); window.location='../produk.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('ID tidak ditemukan'); window.location='../produk.php';</script>";
    exit;
}

// Handle update request
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $wa = $_POST['wa'];

    // Check if a new image is uploaded
    if ($_FILES['gambar']['name'] != '') {
        $gambar = $_FILES['gambar']['name'];
        $tmp_gambar = $_FILES['gambar']['tmp_name'];
        $path = '../../../assets/produk/' . $gambar;

        // Ensure the directory exists
        if (!file_exists('../../../assets/produk')) {
            mkdir('../../../assets/produk', 0777, true);
        }

        // Move the uploaded file
        if (move_uploaded_file($tmp_gambar, $path)) {
            // Delete old image if exists
            if (!empty($data['gambar']) && file_exists('../../../assets/produk/' . $data['gambar'])) {
                unlink('../../../assets/produk/' . $data['gambar']);
            }
            $update_query = "UPDATE produk SET nama = '$nama', harga = '$harga', wa = '$wa', gambar = '$gambar' WHERE id = '$id'";
        } else {
            echo "<script>alert('Gagal mengupload gambar baru');</script>";
        }
    } else {
        $update_query = "UPDATE produk SET nama = '$nama', harga = '$harga', wa = '$wa' WHERE id = '$id'";
    }

    if (isset($update_query) && mysqli_query($koneksi, $update_query)) {
        echo "<script>alert('Produk berhasil diperbarui'); window.location='../produk.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui produk');</script>";
    }
}

// Set default image if image file is missing
$image_path = '../../../assets/produk/' . $data['gambar'];
if (empty($data['gambar']) || !file_exists($image_path)) {
    $image_path = '../../../assets/produk/default.png';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Edit Produk</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Produk</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?php echo htmlspecialchars($data['nama'], ENT_QUOTES); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Produk</label>
                    <input type="number" name="harga" id="harga" class="form-control" value="<?php echo htmlspecialchars($data['harga'], ENT_QUOTES); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="wa" class="form-label">Nomor WA Penjual</label>
                    <input type="text" name="wa" id="wa" class="form-control" value="<?php echo htmlspecialchars($data['wa'], ENT_QUOTES); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar Produk</label>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar.</small>
                </div>
                <div class="mb-3">
                    <img src="<?php echo htmlspecialchars($image_path, ENT_QUOTES); ?>" alt="Gambar Produk" class="img-thumbnail" width="200px">
                </div>
                <button type="submit" name="update" class="btn btn-success">Perbarui</button>
                <a href="../produk.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>