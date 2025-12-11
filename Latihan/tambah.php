<?php
include '../KoneksiDb.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
</head>

<body>

    <h3>Tambah Data Mahasiswa</h3>
    <form action="simpan.php" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>prodi</td>
                <td>:</td>
                <td>
                    <select name="prodi">
                        <option value="">-- pilih prodi --</option>
                        <option value="TL">TL</option>
                        <option value="TRPL">TRPL</option>
                        <option value="TRM">TRM</option>
                        <option value="TRMK">TRMK</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>NoHP</td>
                <td>:</td>
                <td><input type="text" name="nohp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
                <td>
                    <button>
                        <a href="exercise.php">kembali</a>
                    </button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>