<?php
include '../KoneksiDb.php';

$vnidn = $_POST['nidn'];
$vnama = $_POST['nama'];
$vprodi = $_POST['prodi'];
$vemail = $_POST['email'];

$querySimpan = "INSERT INTO tbl_dosen (nidn, nama, prodi, email) VALUES
('$vnidn', '$vnama', '$vprodi', '$vemail')";

mysqli_query($conn, $querySimpan);

// pindah halaman ke index
header('location:PageDosen.php');
