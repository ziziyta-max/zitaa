<?php

// Koneksi Database
$koneksi = mysqli_connect("localhost", "root", "", "rztweekly");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Query Data Mahasiswa
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);

$no = 1;

?>

<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>DATA MAHASISWA</title>
</head>

<body>

```
<table border="1" align="center" cellspacing="0" cellpadding="10">
    <tr>
        <td><a href="index.php">Home</a></td>
        <td><a href="kontak.php">Kontak</a></td>
        <td><a href="profile.php">Profile</a></td>
        <td><a href="mahasiswa.php">Mahasiswa</a></td>
    </tr>
</table>

<h2 align="center">DATA MAHASISWA</h2>

<a href="tambahdata.php">
    <button>Tambah Data</button>
</a>

<br><br>

<table border="1" cellspacing="5" cellpadding="10">
    <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Nama</th>
        <th rowspan="2">NIM</th>
        <th rowspan="2">Foto</th>
        <th colspan="3">Data Mahasiswa</th>
    </tr>

    <tr>
        <th>Jurusan</th>
        <th>Email</th>
        <th>No HP</th>
    </tr>

    <?php while($mhs = mysqli_fetch_assoc($result)) : ?>

    <tr>
        <td align="center"><?= $no++; ?></td>

        <td><?= $mhs['nama']; ?></td>

        <td><?= $mhs['nim']; ?></td>

        <td align="center">
            <img
                src="asset/image/<?= $mhs['foto']; ?>"
                width="70">
        </td>

        <td><?= $mhs['jurusan']; ?></td>

        <td><?= $mhs['email']; ?></td>

        <td><?= $mhs['no_hp']; ?></td>
    </tr>

    <?php endwhile; ?>

</table>

<hr>

<table border="1" cellspacing="5" cellpadding="10">
    <tr>
        <td>1,1</td>
        <td>1,2</td>
        <td>1,3</td>
        <td>1,4</td>
    </tr>

    <tr>
        <td>2,1</td>
        <td rowspan="2" colspan="2" align="center">?</td>
        <td>2,4</td>
    </tr>

    <tr>
        <td>3,1</td>
        <td>3,4</td>
    </tr>

    <tr>
        <td>4,1</td>
        <td>4,2</td>
        <td>4,3</td>
        <td>4,4</td>
    </tr>
</table>
```

</body>
</html>
