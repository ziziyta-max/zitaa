<?php

// Koneksi Database
require 'fungsi.php';
$query = "SELECT * FROM mahasiswa";
$mahasiswas = tampildata($query);
?>

<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


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
        <th colspan="4">Data Mahasiswa</th>

    </tr>

    <tr>
        <th>Jurusan</th>
        <th>Email</th>
        <th>No HP</th>
        <th> Aksi </th>
    </tr>

    <?php 
    $no = 1;
    foreach($mahasiswas as $mhs)
     {
    ?>

    <tr>
        <td align="center"><?=$no++ ?></td>

        <td><?= $mhs['nama']; ?></td>

        <td><?= $mhs['nim']; ?></td>

        <td align="center">
    <img src="asset/image/<?= $mhs['foto']; ?>" class="foto-mhs"> 
</td>
              

        <td><?= $mhs['jurusan']; ?></td>

        <td><?= $mhs['email']; ?></td>

        <td><?= $mhs['no_hp']; ?></td>
        <td>
                    <a href="editdata.php?id=<?= $mhs['id']; ?>">
                        <button class="edit">Edit</button>
                    </a>

                    <a href="deletedata.php?id=<?= $mhs['id']; ?>" onclick="return confirm('seirus mau di hapus???')"
                    ><button class="hapus">Hapus</button>
                    </a>
                </td>
    </tr>
   <?php } ?>
   

</body>
</html>
