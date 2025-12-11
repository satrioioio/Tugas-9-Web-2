<?php

include '../KoneksiDb.php';

$sql = 'SELECT * FROM tb_mahasiswa';
$query = mysqli_query($conn, $sql);

if (!$query) {
    die('SQL Error: ' . mysqli_error($conn));
}
?>

<h2>Data Mahasiswa</h2>

<button>
    <a href="tambah.php">Tambah Data</a>
</button>
<br>
<br>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No.Hp</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        while ($row = mysqli_fetch_array($query)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row[1] ?></td>
                <td><?= $row[2] ?></td>
                <td><?php echo $row['prodi'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['nohp'] ?></td>
                <td>
                    <a href="edit.php?nim=<?= $row['nim']; ?>">Ubah</a> |
                    <a href="delete.php?nim=<?= $row['nim']; ?>">Hapus</a>
                </td>
            </tr>
        <?php $i++;
        endwhile ?>
    </tbody>
</table>
<?php mysqli_free_result($query); ?>