<?php

include '../koneksiDb.php';

if (isset($_GET['id_nilai'])) {
    $xid_nilai = $_GET['id_nilai'];
}

$queryHapus = "DELETE FROM tbl_nilai WHERE id_nilai = '$xid_nilai'";

$hasil = mysqli_query($conn, $queryHapus);


if ($hasil) {
    header('location:PageNilai.php');
} else {
    die('Hapus Data Gagal: ' . mysqli_error($conn));
}
