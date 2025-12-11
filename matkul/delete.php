<?php

include '../koneksiDb.php';

if (isset($_GET['kodeMatkul'])) {
    $xkodeMatkul = $_GET['kodeMatkul'];
}

$queryHapus = "DELETE FROM tbl_matkul WHERE kodeMatkul = '$xkodeMatkul'";

$hasil = mysqli_query($conn, $queryHapus);


if ($hasil) {
    header('location:PageMatkul.php');
} else {
    die('Hapus Data Gagal: ' . mysqli_error($conn));
}
