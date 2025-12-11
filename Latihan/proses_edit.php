<?php
include '../koneksiDb.php';

$vnim = $_POST['nim'];
$vnama = $_POST['nama'];
$vprodi = $_POST['prodi'];
$vemail = $_POST['email'];
$vnohp = $_POST['nohp'];

$queryUpdate = "UPDATE tb_mahasiswa SET
                nama = '$vnama',
                prodi = '$vprodi',
                email = '$vemail',
                nohp = '$vnohp'
                WHERE nim = '$vnim'";

mysqli_query($conn, $queryUpdate);

header('location:exercise.php');
