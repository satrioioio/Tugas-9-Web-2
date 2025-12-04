<?php
$conn = mysqli_connect('localhost', 'root', 'iowisnu1', 'kampus');

if (!$conn) {
    die('Gagal Terhubung MySQL: ' . mysqli_connect_error());
}
