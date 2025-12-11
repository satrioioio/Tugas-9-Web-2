<?php
include '../KoneksiDb.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Nilai</title>

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
                <h4 class="mb-0"><i class="bi bi-journal-plus me-2"></i> Tambah Data Nilai</h4>
            </div>
            <div class="card-body">
                <form action="simpan.php" method="POST">

                    <div class="mb-3">
                        <label for="nim" class="form-label fw-bold">NIM Mahasiswa</label>
                        <input type="text" class="form-control" id="nim" name="nim" required placeholder="Contoh: 12345678">
                    </div>

                    <div class="mb-3">
                        <label for="kodeMatkul" class="form-label fw-bold">Kode Mata Kuliah</label>
                        <input type="text" class="form-control" id="kodeMatkul" name="kodeMatkul" required placeholder="Contoh: IF101">
                    </div>

                    <div class="mb-3">
                        <label for="nidn" class="form-label fw-bold">NIDN Dosen</label>
                        <input type="text" class="form-control" id="nidn" name="nidn" required placeholder="Contoh: 01019001">
                    </div>

                    <div class="mb-3">
                        <label for="nilai" class="form-label fw-bold">Nilai Angka (0-100)</label>
                        <input type="number" step="0.01" class="form-control" id="nilai" name="nilai" required min="0" max="100">
                    </div>

                    <div class="mb-3">
                        <label for="nilaiHuruf" class="form-label fw-bold">Nilai Huruf</label>
                        <select class="form-select" id="nilaiHuruf" name="nilaiHuruf" required>
                            <option value="">-- Pilih Nilai Huruf --</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2">
                            <a href="PageNilai.php" class="text-white text-decoration-none"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
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