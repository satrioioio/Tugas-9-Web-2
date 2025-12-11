<?php
include '../KoneksiDb.php';

$vnim = $_POST['nim'];
$vnama = $_POST['nama'];
$vprodi = $_POST['prodi'];
$vemail = $_POST['email'];
$vnohp = $_POST['nohp'];

$querySimpan = "INSERT INTO tb_mahasiswa (nim, nama, prodi, email, nohp) VALUES
('$vnim', '$vnama', '$vprodi', '$vemail', '$vnohp')";

mysqli_query($conn, $querySimpan);

// pindah halaman ke index
header('location: exercise.php');
