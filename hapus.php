<?php
include 'koneksi.php';

$id_tamu = $_GET['id_tamu'];

$query = "DELETE FROM tb_tamu WHERE id_tamu = $id_tamu";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
