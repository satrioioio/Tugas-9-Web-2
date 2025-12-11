<?php
include '../KoneksiDb.php';

$vnim = $_POST['nim'];
$vkodeMatkul = $_POST['kodeMatkul'];
$vnidn = $_POST['nidn'];
$vnilai = $_POST['nilai'];
$vnilai_huruf = $_POST['nilaiHuruf'];

$querySimpan = "INSERT INTO tbl_nilai (nilai, nilaiHuruf, kodeMatkul, nim, nidn) VALUES
('$vnilai', '$vnilai_huruf', '$vkodeMatkul', '$vnim', '$vnidn')";

mysqli_query($conn, $querySimpan);

// pindah halaman ke PageNilai
header('location:PageNilai.php');
