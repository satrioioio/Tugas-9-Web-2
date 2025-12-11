<?php
include '../KoneksiDb.php';

$vkodeMatkul = $_POST['kodeMatkul'];
$vnamamatkul = $_POST['namamatkul'];
$vsks = $_POST['sks'];
$vnidn = $_POST['nidn'];

$querySimpan = "INSERT INTO tbl_Matkul (kodeMatkul, namamatkul, sks, nidn) VALUES
('$vkodeMatkul', '$vnamamatkul', '$vsks', '$vnidn')";

mysqli_query($conn, $querySimpan);

// pindah halaman ke index
header('location:PageMatkul.php');
