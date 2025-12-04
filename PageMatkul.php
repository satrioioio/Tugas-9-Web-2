<?php
include 'KoneksiDb.php';

$sql = 'SELECT * FROM tbl_matkul';
$query = mysqli_query($conn, $sql);

if (!$query) {
    die('SQL Error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

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

        <div class="sidebar col-md-2 p-3 d-none d-md-block">
            <h4 class="text-white text-center mb-4">SIAKAD</h4>
            <a href="index.php"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
            <a href="PageMahasiswa.php"><i class="bi bi-people me-2"></i> Data Mahasiswa</a>
            <a href="PageMatkul.php" class="active-link"><i class="bi bi-book me-2"></i> Data Mata Kuliah</a>
            <a href="PageDosen.php"><i class="bi bi-person-video3 me-2"></i> Data Dosen</a>
            <a href="PageNilai.php"><i class="bi bi-clipboard-data me-2"></i> Data Nilai</a>
        </div>

        <div class="col-md-10 p-4 bg-light w-60">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Mata Kuliah</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>Kode Matkul</th>
                                    <th>Nama Matkul</th>
                                    <th>SKS</th>
                                    <th>NIDN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                while ($row = mysqli_fetch_array($query)) : ?>
                                    <tr>
                                        <td class="fw-bold"><?= $row[0] ?></td>
                                        <td><?= $row[1] ?></td>
                                        <td><?= $row[2] ?></span></td>
                                        <td><?= $row[3] ?></td>
                                    </tr>
                                <?php $i++;
                                endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php mysqli_free_result($query); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>