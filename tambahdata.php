<?php 
require 'fungsi.php';
if(isset($_POST["kirim"]))
{
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $email = $_POST["email"];
    $prodi = $_POST["jurusan"];
    $nohp = $_POST["nohp"];
    $foto = $_POST["foto"];

    $query = "INSERT INTO mahasiswa (nama,nim,jurusan,email,no_hp,foto)
              VALUES ('$nama','$nim','$prodi','$email','$nohp','$foto')";

    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "<script>
            alert('Data berhasil ditambahkan');
            window.location.href='mahasiswa.php';
        </script>";
    }else{
        echo "<script>
            alert('Data gagal ditambahkan');
        </script>";

        echo mysqli_error($koneksi);
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data | Teknologi Informasi </title>
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <body>

<div class="form-container">

    <div class="form-card">

        <h2>
            <i class="fa-solid fa-user-plus"></i>
            Tambah Data Mahasiswa
        </h2>

        <p class="subtitle">
            Silakan isi seluruh data mahasiswa dengan lengkap.
        </p>

        <form action="" method="post">

            <div class="input-group">
                <label>Nama</label>
                <div class="input-box">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="nama" required>
                </div>
            </div>

            <div class="input-group">
                <label>NIM</label>
                <div class="input-box">
                    <i class="fa-solid fa-id-card"></i>
                    <input type="text" name="nim" required>
                </div>
            </div>

            <div class="input-group">
                <label>Jurusan</label>
                <div class="input-box">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <input type="text" name="jurusan" required>
                </div>
            </div>

            <div class="input-group">
                <label>Email</label>
                <div class="input-box">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" required>
                </div>
            </div>

            <div class="input-group">
                <label>Nomor HP</label>
                <div class="input-box">
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" name="nohp" required>
                </div>
            </div>

            <div class="input-group">
                <label>Foto</label>
                <div class="input-box">
                    <i class="fa-solid fa-image"></i>
                    <input type="text" name="foto" placeholder="contoh : foto.jpg">
                </div>
            </div>

            <div class="button-group">

                <button type="submit" name="kirim">
                    <i class="fa-solid fa-floppy-disk"></i>
                    Simpan Data
                </button>

                <a href="mahasiswa.php" class="btn-back">
                    <i class="fa-solid fa-arrow-left"></i>
                    Kembali
                </a>

            </div>

        </form>

    </div>

</div>
<script>

const inputs=document.querySelectorAll("input");

inputs.forEach(input=>{

input.addEventListener("focus",()=>{

input.parentElement.style.boxShadow="0 0 20px rgba(255,255,255,.6)";

});

input.addEventListener("blur",()=>{

input.parentElement.style.boxShadow="none";

});

});

</script>
</body>
</body>
</html>