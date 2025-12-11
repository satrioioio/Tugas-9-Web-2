<?php
include '../KoneksiDb.php';

$vnim = $_POST['nim'];
$vnama = $_POST['nama'];
$vprodi = $_POST['prodi'];
$vangkatan = $_POST['angkatan'];
$vemail = $_POST['email'];

$querySimpan = "INSERT INTO tbl_mahasiswa (nim, nama, prodi, angkatan, email) VALUES
('$vnim', '$vnama', '$vprodi', '$vangkatan', '$vemail')";

mysqli_query($conn, $querySimpan);

// pindah halaman ke index
header('location:PageMahasiswa.php');
