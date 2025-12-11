<?php
include '../KoneksiDb.php';
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
            /* Batasi lebar container formulir */
        }
    </style>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-primary text-white py-3">
                <h4 class="mb-0"><i class="bi bi-person-plus-fill me-2"></i> Tambah Data Mahasiswa</h4>
            </div>
            <div class="card-body">
                <form action="simpan.php" method="POST">

                    <div class="mb-3">
                        <label for="nim" class="form-label fw-bold">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="prodi" class="form-label fw-bold">Program Studi</label>
                        <select class="form-select" id="prodi" name="prodi" required>
                            <option value="">-- Pilih Program Studi --</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Rekayasa Perangkat Lunak">Teknik Rekayasa Perangkat Lunak</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="angkatan" class="form-label fw-bold">Angkatan</label>
                        <input type="number" class="form-control" id="angkatan" name="angkatan" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>