<?php
include '../koneksiDb.php';

$vid_nilai = $_POST['id_nilai']; // Ambil nilai 'no' (Primary Key) untuk klausa WHERE
$vnim = $_POST['nim'];
$vkodeMatkul = $_POST['kodeMatkul'];
$vnidn = $_POST['nidn'];
$vnilai = $_POST['nilai'];
$vnilai_huruf = $_POST['nilaiHuruf'];

$queryUpdate = "UPDATE tbl_nilai SET
                nilai = '$vnilai',
                nilaiHuruf = '$vnilai_huruf'
                WHERE id_nilai = '$vid_nilai'";

mysqli_query($conn, $queryUpdate);

header('location:PageNilai.php');
