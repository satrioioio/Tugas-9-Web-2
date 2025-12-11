<?php
include '../koneksiDb.php';

$vkodeMatkul = $_POST['kodeMatkul'];
$vnamamatkul = $_POST['namaMatkul'];
$vsks = $_POST['sks'];
$vnidn = $_POST['nidn'];

$queryUpdate = "UPDATE tbl_Matkul SET
                namaMatkul = '$vnamamatkul',
                sks = '$vsks',
                nidn = '$vnidn'
                WHERE kodeMatkul = '$vkodeMatkul'";

mysqli_query($conn, $queryUpdate);

header('location:PageMatkul.php');
