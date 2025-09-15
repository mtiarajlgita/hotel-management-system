<?php
include 'koneksi.php';

$query = "SELECT * FROM tb_tamu";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu Hotel</title>
    <!-- Link CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Jumbotron Section -->
        <div class="jumbotron bg-light p-4 shadow">
            <h1 class="display-5">Daftar Tamu Hotel</h1>
            <p class="lead">Lihat dan kelola data tamu hotel dengan mudah melalui halaman ini.</p>
            <hr class="my-4">
            <a href="tambah.php" class="btn btn-primary">Tambah Data Tamu</a>
        </div>

        <!-- Table Section -->
        <div class="mt-4">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Tamu</th>
                        <th>No Identitas</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) :
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['nama_tamu']; ?></td>
                            <td><?= $row['no_identitas']; ?></td>
                            <td><?= $row['no_hp']; ?></td>
                            <td><?= $row['alamat_tamu']; ?></td>
                            <td><?= $row['tanggal_checkin']; ?></td>
                            <td><?= $row['tanggal_checkout']; ?></td>
                            <td>
                                <a href="edit.php?id_tamu=<?= $row['id_tamu']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="hapus.php?id_tamu=<?= $row['id_tamu']; ?>" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Link CDN Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
