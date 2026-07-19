<?php
require 'fungsi.php';

$id = $_GET["id"];

if(deletedata($id)>0)
{
    echo "<script>
            alert('Data berhasil ditambahkan');
            window.location.href='mahasiswa.php';
        </script>";
}
else
{
 echo "<script>
            alert('Data gagal ditambahkan');
        </script>";
}
?>