<?php
include 'koneksi.php';

$id_tamu = $_GET['id_tamu'];
$query = "SELECT * FROM tb_tamu WHERE id_tamu = $id_tamu";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Tamu</title>
    <!-- Link CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="jumbotron bg-light p-4 shadow">
            <h1 class="display-5">Edit Data Tamu</h1>
            <p class="lead">Silakan perbarui informasi tamu di formulir berikut.</p>
            <hr class="my-4">

            <form action="aksi_edit.php" method="POST">
                <input type="hidden" name="id_tamu" value="<?= $row['id_tamu'] ?>">

                <div class="mb-3">
                    <label for="nama_tamu" class="form-label">Nama Tamu:</label>
                    <input type="text" class="form-control" name="nama_tamu" value="<?= $row['nama_tamu'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="no_identitas" class="form-label">No Identitas:</label>
                    <input type="text" class="form-control" name="no_identitas" value="<?= $row['no_identitas'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP:</label>
                    <input type="text" class="form-control" name="no_hp" value="<?= $row['no_hp'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="alamat_tamu" class="form-label">Alamat:</label>
                    <textarea class="form-control" name="alamat_tamu" rows="3" required><?= $row['alamat_tamu'] ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="tanggal_checkin" class="form-label">Tanggal Check-in:</label>
                    <input type="date" class="form-control" name="tanggal_checkin" value="<?= $row['tanggal_checkin'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal_checkout" class="form-label">Tanggal Check-out:</label>
                    <input type="date" class="form-control" name="tanggal_checkout" value="<?= $row['tanggal_checkout'] ?>">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="index.php" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>

    <!-- Link CDN Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
