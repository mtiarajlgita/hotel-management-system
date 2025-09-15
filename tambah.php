<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Tamu</title>
    <!-- Link CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Jumbotron Section -->
        <div class="jumbotron bg-light p-4 shadow">
            <h1 class="display-5">Tambah Data Tamu</h1>
            <p class="lead">Isi formulir di bawah ini untuk menambahkan data tamu baru ke database.</p>
            <hr class="my-4">
        </div>

        <!-- Form Section -->
        <div class="mt-4">
            <form action="aksi_tambah.php" method="POST">
                <div class="mb-3">
                    <label for="nama_tamu" class="form-label">Nama Tamu:</label>
                    <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" required>
                </div>

                <div class="mb-3">
                    <label for="no_identitas" class="form-label">No Identitas:</label>
                    <input type="text" class="form-control" id="no_identitas" name="no_identitas" required>
                </div>

                <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP:</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>

                <div class="mb-3">
                    <label for="alamat_tamu" class="form-label">Alamat:</label>
                    <textarea class="form-control" id="alamat_tamu" name="alamat_tamu" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="tanggal_checkin" class="form-label">Tanggal Check-in:</label>
                    <input type="date" class="form-control" id="tanggal_checkin" name="tanggal_checkin" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal_checkout" class="form-label">Tanggal Check-out:</label>
                    <input type="date" class="form-control" id="tanggal_checkout" name="tanggal_checkout">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="index.php" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>

    <!-- Link CDN Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
