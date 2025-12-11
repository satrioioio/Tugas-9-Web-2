<?php
include '../KoneksiDb.php';

//ambil data nim sebagai acuan
$xnim = $_GET['nim'];

//panggil data yang akan diubah berdasarkan nim
$data = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa WHERE nim='$xnim'");

//pindahkan data ke variabel baru
$mhs = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Mahasiswa</title>

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
                <h4 class="mb-0"><i class="bi bi-person-plus-fill me-2"></i> Edit Data Mahasiswa</h4>
            </div>
            <div class="card-body">
                <form action="proses_edit.php" method="POST">

                    <div class="mb-3">
                        <label for="nim" class="form-label fw-bold">NIM</label>
                        <input type="text" class="form-control" id="nim" value="<?= $mhs['nim'] ?>" name="nim" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" value="<?= $mhs['nama'] ?>" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="prodi" class="form-label fw-bold">Program Studi</label>
                        <select class="form-select" id="prodi" name="prodi" required>
                            <option value="">-- Pilih Program Studi --</option>
                            <option value="Teknik Informatika" <?= $mhs['prodi'] == 'Teknik Informatika' ? 'selected' : ''; ?>>Teknik Informatika</option>
                            <option value="Teknik Rekayasa Perangkat Lunak" <?= $mhs['prodi'] == 'Teknik Rekayasa Perangkat Lunak' ? 'selected' : ''; ?>>Teknik Rekayasa Perangkat Lunak</option>
                            <option value="Sistem Informasi" <?= $mhs['prodi'] == 'Sistem Informasi' ? 'selected' : ''; ?>>Sistem Informasi</option>
                            <option value="Teknik Komputer" <?= $mhs['prodi'] == 'Teknik Komputer' ? 'selected' : ''; ?>>Teknik Komputer</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="angkatan" class="form-label fw-bold">Angkatan</label>
                        <input type="number" class="form-control" id="angkatan" value="<?= $mhs['angkatan'] ?>" name="angkatan" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="email" value="<?= $mhs['email'] ?>" name="email" required>
                    </div>


                    <hr>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2">
                            <a href="PageMahasiswa.php" class="text-white text-decoration-none"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
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