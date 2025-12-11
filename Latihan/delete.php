<?php

include '../koneksiDb.php';

if (isset($_GET['nim'])) {
    $xnim = $_GET['nim'];
}

$queryHapus = "DELETE FROM tb_mahasiswa WHERE nim = '$xnim'";

$hasil = mysqli_query($conn, $queryHapus);


if ($hasil) {
    header('location:exercise.php');
} else {
    die('Hapus Data Gagal: ' . mysqli_error($conn));
}
