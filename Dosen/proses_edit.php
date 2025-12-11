<?php
include '../koneksiDb.php';

$vnidn = $_POST['nidn'];
$vnama = $_POST['nama'];
$vprodi = $_POST['prodi'];
$vemail = $_POST['email'];

$queryUpdate = "UPDATE tbl_dosen SET
                nama = '$vnama',
                prodi = '$vprodi',
                email = '$vemail'
                WHERE nidn = '$vnidn'";

mysqli_query($conn, $queryUpdate);

header('location:PageDosen.php');
