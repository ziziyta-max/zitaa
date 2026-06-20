<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data | Teknologi Informasi </title>
</head>
<body>
    <h2> Tambah Data Mahasiswa</h2>
    <form action="mahasiswa.php" method="post"> 
        <table cellpading="5px">
            <tr>
                <td><label for="nama">Nama </label></td>
                <td> : </td>
                <td><input type="text" id="nama" name="nama" required/></label></td>
            </tr>
             <tr>
                <td><label for="nim"> NIM </label></td>
                <td> : </td>
                <td><input type="text" id="nim" name="nim " required/></label></td>
            </tr>
             <tr>
                <td><label for="foto"> Foto </label></td>
                <td> : </td>
                <td><input type="file" id="foto" name="foto" required/></label></td>
            </tr>
 <tr>
                <td><label for="uts"> UTS</label></td>
                <td> : </td>
                <td><input type="number" id="uts" name="uts" required/></label></td>
            </tr>
            <tr>
                <td><label for="uas"> UAS</label></td>
                <td> : </td>
                <td><input type="number" id="uas" name="uas" required/></label></td>
            </tr>
            <tr>
                <td><label for="tugas">Tugas</label></td>
                <td> : </td>
                <td><input type="number" id="tugas" name="tugas" required/></label></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="submit">Tambah Data</button>
                </td>
            </tr>
        </table>
    
    </form>
   <break> 
    <h2> Tambah Data Mahasiswa</h2>
    <form action="mahasiswaphp" method="post"> 
        <table cellpading="5px">
            <tr>
                <td><label for="nama">Nama </label></td>
                <td> : </td>
                <td><input type="text" id="nama" name="nama" required/></label></td>
            </tr>
             <tr>
                <td><label for="nim"> NIM </label></td>
                <td> : </td>
                <td><input type="text" id="nim" name="nim " required/></label></td>
            </tr>
             <tr>
                <td><label for="password"> Password </label></td>
                <td> : </td>
                <td><input type="password" id="password" name="password" required/></label></td>
            </tr>
             <tr>
                <td><label for="email"> Email</label></td>
                <td> : </td>
                <td><input type="email" id="email" name="email" required/></label></td>
            </tr>
             <tr>
                <td><label for="no hp"> NO HP </label></td>
                <td> : </td>
                <td><input type=" tel" id="no hp" name="no hp" required/></label></td>
            </tr>
             <tr>
                <td><label for="website pribadi"> Website pribadi </label></td>
                <td> : </td>
                <td><input type="input  url" id="website pribadi" name="website pribadi" required/></label></td>
            </tr>
            <tr>
                <td><label for="tanggal lahir"> tanggal lahir </label></td>
                <td> : </td>
                <td><input type="input data" id="tanggal lahir" name="tanggal lahir" required/></label></td>
            </tr>
             <tr>
                <td><label for="warna favorit"> warna favorit </label></td>
                <td> : </td>
                <td><input type="input color" id="warna favorit" name="warna favorit" required/></label></td>
            </tr>
            <tr>
                <td><label for="tingkat kepuasan"> tingkat kepuasan </label></td>
                <td> : </td>
                <td><input type="input range" id="tingkat kepuasan" name="tingkat kepuasan" required/></label></td>
            </tr>
            <td><label>jenis kelamin</label></td>
                <td>:</td>
                <td>
                <input type="radio" name="jk" value="Laki-Laki">
                <label for="jk">Laki-Laki</label>
                <input type="radio" name="pr" value="Perempuan">
                <label for="pr">Perempuan</label>
                </td>
                <tr>
            <td><label>Hobi</label></td>
                <td>:</td>
                <td>
                <input type="checkbox" name="hobi" value="olahraga">
                <label for="hobi">olahraga</label>
                <input type="checkbox" name="hobi" value="melukis">
                <label for="hobi">melukis</label>
                <input type="checkbox" name="hobi" value="memasak">
                <label for="hobi">memasak</label>
                </td>
                </tr>
             <tr>
                <td><label for="foto"> Foto </label></td>
                <td> : </td>
                <td><input type="file" id="foto" name="foto" required/></label></td>
            </tr>
 <tr>
                <td><label for="alamat">Alamat</label></td>
                <td> : </td>
                <td><input type="textarea" id="alamat" name="alamat" required/></label></td>
            </tr>
        </table> 

              <table>
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="jurusan">
                    <option value="TI">TI</option>
                    <option value="IF">IF</option>
                    <option value="PBI">PBI</option>
                </select>
            </table>
             <tr>
                <td colspan="3">
                    <button type="submit" name="submit">Tambah Data</button>
                </td>
            </tr>

        </table>
    
    </form>



</break>
</body>
</html>