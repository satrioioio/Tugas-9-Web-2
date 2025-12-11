<?php

include '../koneksiDb.php';

if (isset($_GET['nidn'])) {
    $xnidn = $_GET['nidn'];
}

$queryHapus = "DELETE FROM tbl_dosen WHERE nidn = '$xnidn'";

$hasil = mysqli_query($conn, $queryHapus);


if ($hasil) {
    header('location:PageDosen.php');
} else {
    die('Hapus Data Gagal: ' . mysqli_error($conn));
}
