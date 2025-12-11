<?php
include '../KoneksiDb.php';

//ambil data nim sebagai acuan
$xnim = $_GET['nim'];

//panggil data yang akan diubah berdasarkan nim
$data = mysqli_query($conn, "SELECT * FROM tb_mahasiswa WHERE nim='$xnim'");

//pindahkan data ke variabel baru
$mhs = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form edit</title>
</head>

<body>

    <h3>Edit Data Mahasiswa</h3>
    <form action="proses_edit.php" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?= $mhs['nim'] ?>"></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?= $mhs['nama'] ?>"></td>
            </tr>
            <tr>
                <td>prodi</td>
                <td>:</td>
                <td>
                    <select name="prodi">
                        <option value="">-- pilih prodi --</option>
                        <option value="TL" <?= $mhs['prodi'] == 'TL' ? 'selected' : ''; ?>>TL</option>
                        <option value="TRPL" <?= $mhs['prodi'] == 'TRPL' ? 'selected' : ''; ?>>TRPL</option>
                        <option value="TRM" <?= $mhs['prodi'] == 'TRM' ? 'selected' : ''; ?>>TRM</option>
                        <option value="TRMK" <?= $mhs['prodi'] == 'TRMK' ? 'selected' : ''; ?>>TRMK</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email" value="<?= $mhs['email'] ?>"></td>
            </tr>
            <tr>
                <td>NoHP</td>
                <td>:</td>
                <td><input type="text" name="nohp" value="<?= $mhs['nohp'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="update"></td>
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