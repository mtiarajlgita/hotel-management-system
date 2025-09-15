<?php
include 'koneksi.php';

$id_tamu = $_POST['id_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$no_identitas = $_POST['no_identitas'];
$no_hp = $_POST['no_hp'];
$alamat_tamu = $_POST['alamat_tamu'];
$tanggal_checkin = $_POST['tanggal_checkin'];
$tanggal_checkout = $_POST['tanggal_checkout'];

$query = "UPDATE tb_tamu SET 
          nama_tamu = '$nama_tamu', 
          no_identitas = '$no_identitas', 
          no_hp = '$no_hp', 
          alamat_tamu = '$alamat_tamu', 
          tanggal_checkin = '$tanggal_checkin', 
          tanggal_checkout = '$tanggal_checkout' 
          WHERE id_tamu = $id_tamu";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
