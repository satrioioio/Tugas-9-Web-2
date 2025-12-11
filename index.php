<?php require 'koneksiDb.php'; ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kampus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .active-link {
            background-color: #0d6efd;
            font-weight: bold;
        }

        .table-responsive {
            overflow-x: auto;
        }
    </style>
</head>

<body>

    <div class="d-flex">
        <div class="sidebar col-md-2 p-3">
            <h3 class="text-white text-center mb-4">SIAKAD</h3>
            <a href="index.php" class="active-link"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
            <a href="mahasiswa/PageMahasiswa.php"><i class="bi bi-people me-2"></i> Data Mahasiswa</a>
            <a href="matkul/PageMatkul.php"><i class="bi bi-book me-2"></i> Data Mata Kuliah</a>
            <a href="Dosen/PageDosen.php"><i class="bi bi-person-video3 me-2"></i> Data Dosen</a>
            <a href="nilai/PageNilai.php"><i class="bi bi-clipboard-data me-2"></i> Data Nilai</a>
        </div>

        <div class="col-md-10 p-4 bg-light">
            <h2>Selamat Datang di Dashboard</h2>
            <p class="text-muted">Ringkasan data sistem akademik.</p>
            <p class="text-muted">Satrio Ilham Syahputra | 202404022</p>
            <hr>

            <div class="row">
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Mahasiswa</h5>
                            <p class="card-text fs-2"><i class="bi bi-people"></i> Xx</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Dosen</h5>
                            <p class="card-text fs-2"><i class="bi bi-person-video3"></i> Xx</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Mata Kuliah</h5>
                            <p class="card-text fs-2"><i class="bi bi-book"></i> Xx</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Data Nilai</h5>
                            <p class="card-text fs-2"><i class="bi bi-journal"></i> Xx</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>