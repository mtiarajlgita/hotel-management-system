<?php
include 'koneksi.php';

$nama_tamu = $_POST['nama_tamu'];
$no_identitas = $_POST['no_identitas'];
$no_hp = $_POST['no_hp'];
$alamat_tamu = $_POST['alamat_tamu'];
$tanggal_checkin = $_POST['tanggal_checkin'];
$tanggal_checkout = $_POST['tanggal_checkout'];

$query = "INSERT INTO tb_tamu (nama_tamu, no_identitas, no_hp, alamat_tamu, tanggal_checkin, tanggal_checkout) 
          VALUES ('$nama_tamu', '$no_identitas', '$no_hp', '$alamat_tamu', '$tanggal_checkin', '$tanggal_checkout')";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
