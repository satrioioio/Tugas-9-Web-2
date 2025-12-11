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
                <h4 class="mb-0"><i class="bi bi-person-plus-fill me-2"></i> Tambah Data Mata Kuliah</h4>
            </div>
            <div class="card-body">
                <form action="simpan.php" method="POST">

                    <div class="mb-3">
                        <label for="kodeMatkul" class="form-label fw-bold">Kode Matkul</label>
                        <input type="text" class="form-control" id="kodeMatkul" name="kodeMatkul" required>
                    </div>

                    <div class="mb-3">
                        <label for="namamatkul" class="form-label fw-bold">Nama Matkul</label>
                        <input type="text" class="form-control" id="namamatkul" name="namamatkul" required>
                    </div>

                    <div class="mb-3">
                        <label for="sks" class="form-label fw-bold">SKS</label>
                        <input type="number" class="form-control" id="sks" name="sks" required>
                    </div>

                    <div class="mb-3">
                        <label for="nidn" class="form-label fw-bold">NIDN</label>
                        <input type="number" class="form-control" id="nidn" name="nidn" required>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>