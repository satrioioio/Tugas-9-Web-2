<?php

$conn = mysqli_connect('localhost', 'root', 'iowisnu1', 'latihan');

if (!$conn) {
    die('Gagal Terhubung MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT * FROM tb_mahasiswa';
$query = mysqli_query($conn, $sql);

if (!$query) {
    die('SQL Error: ' . mysqli_error($conn));
}
?>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No.Hp</th>
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
            </tr>
        <?php $i++;
        endwhile ?>
    </tbody>
</table>
<?php mysqli_free_result($query); ?>