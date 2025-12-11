<?php
include '../KoneksiDb.php';

//ambil data nim sebagai acuan
$xkodeMatkul = $_GET['kodeMatkul'];

//panggil data yang akan diubah berdasarkan nim
$data = mysqli_query($conn, "SELECT * FROM tbl_matkul WHERE kodeMatkul='$xkodeMatkul'");

//pindahkan data ke variabel baru
$mtkl = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Mata Kuliah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        .container {
            max-width: 600px;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-primary text-white py-3">
                <h4 class="mb-0"><i class="bi bi-person-plus-fill me-2"></i> Edit Data Mata Kuliah</h4>
            </div>
            <div class="card-body">
                <form action="proses_edit.php" method="POST">

                    <div class="mb-3">
                        <label for="kodematkul" class="form-label fw-bold">Kode Matkul</label>
                        <input type="text" class="form-control" id="kodematkul" value="<?= $mtkl['kodeMatkul'] ?>" name="kodeMatkul" required>
                    </div>

                    <div class="mb-3">
                        <label for="namaMatkul" class="form-label fw-bold">Nama Matkul</label>
                        <input type="text" class="form-control" id="nama" value="<?= $mtkl['namaMatkul'] ?>" name="namaMatkul" required>
                    </div>

                    <div class="mb-3">
                        <label for="sks" class="form-label fw-bold">SKS</label>
                        <input type="number" class="form-control" id="sks" value="<?= $mtkl['sks'] ?>" name="sks" required>
                    </div>

                    <div class="mb-3">
                        <label for="nidn" class="form-label fw-bold">NIDN</label>
                        <input type="number" class="form-control" id="nidn" value="<?= $mtkl['nidn'] ?>" name="nidn" required>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2">
                            <a href="PageMatkul.php" class="text-white text-decoration-none"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
                        </button>
                        <button type="submit" value="simpan" class="btn btn-success">
                            <i class="bi bi-save me-1"></i> Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>