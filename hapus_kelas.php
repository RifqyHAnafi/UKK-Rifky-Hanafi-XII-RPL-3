<?php
include 'koneksi.php';
$id_kelas = $_GET['id'];
$qPilih = "DELETE FROM kelas WHERE id_kelas = $id_kelas";
$result = mysqli_query($conn, $qPilih);
if ($result) {
header('location: tabel_kelas.php');
}