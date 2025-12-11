<?php
include '../KoneksiDb.php';

// ambil data 'no' (asumsi primary key dari tbl_nilai) sebagai acuan
$xid_nilai = $_GET['id_nilai'];

// panggil data yang akan diubah berdasarkan 'no'
$data = mysqli_query($conn, "SELECT * FROM tbl_nilai WHERE id_nilai ='$xid_nilai'");

// pindahkan data ke variabel baru
$nilai_mhs = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Nilai</title>

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
                <h4 class="mb-0"><i class="bi bi-pencil-square me-2"></i> Edit Data Nilai</h4>
            </div>
            <div class="card-body">
                <form action="proses_edit.php" method="POST">

                    <input type="hidden" name="id_nilai" value="<?= $nilai_mhs['id_nilai'] ?>">

                    <div class="mb-3">
                        <label for="nim" class="form-label fw-bold">NIM Mahasiswa</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="<?= $nilai_mhs['nim'] ?>" required readonly>
                    </div>

                    <div class="mb-3">
                        <label for="kodeMatkul" class="form-label fw-bold">Kode Mata Kuliah</label>
                        <input type="text" class="form-control" id="kodeMatkul" name="kodeMatkul" value="<?= $nilai_mhs['kodeMatkul'] ?>" required readonly>
                    </div>

                    <div class="mb-3">
                        <label for="nidn" class="form-label fw-bold">NIDN Dosen</label>
                        <input type="text" class="form-control" id="nidn" name="nidn" value="<?= $nilai_mhs['nidn'] ?>" required readonly>
                    </div>

                    <div class="mb-3">
                        <label for="nilai" class="form-label fw-bold">Nilai Angka (0-100)</label>
                        <input type="number" step="0.01" class="form-control" id="nilai" name="nilai" value="<?= $nilai_mhs['nilai'] ?>" required min="0" max="100">
                    </div>

                    <div class="mb-3">
                        <label for="nilaiHuruf" class="form-label fw-bold">Nilai Huruf</label>
                        <select class="form-select" id="nilaiHuruf" name="nilaiHuruf" required>
                            <option value="">-- Pilih Nilai Huruf --</option>
                            <option value="A" <?= $nilai_mhs['nilaiHuruf'] == 'A' ? 'selected' : ''; ?>>A</option>
                            <option value="B" <?= $nilai_mhs['nilaiHuruf'] == 'B' ? 'selected' : ''; ?>>B</option>
                            <option value="C" <?= $nilai_mhs['nilaiHuruf'] == 'C' ? 'selected' : ''; ?>>C</option>
                            <option value="D" <?= $nilai_mhs['nilaiHuruf'] == 'D' ? 'selected' : ''; ?>>D</option>
                            <option value="E" <?= $nilai_mhs['nilaiHuruf'] == 'E' ? 'selected' : ''; ?>>E</option>
                        </select>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2">
                            <a href="PageNilai.php" class="text-white text-decoration-none"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
                        </button>
                        <button type="submit" value="simpan" class="btn btn-success">
                            <i class="bi bi-save me-1"></i> Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>