

<!DOCTYPE html>

<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WEB TI 2026 - Home</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
   


  <section class="center">
    <div class="hero-text fade-in">
      <h1 align="center">
        SELAMAT DATANG DI WEB TI UNIMUS 
      </h1>
      <table border="1" align="center" cellspacing="0" cellpadding="10px">
        <tr> 
          <td> <a href ="index.php"> Home </a>  </td> 
          <td> <a href ="kontak.php"> Kontak </a> </td>
          <td> <a href ="profile.php"> Profile </a> </td>
          <td> <a href ="mahasiswa.php"> Mahasiswa </a></td>
        </tr>
      </table>
      
      <img src="asset/image/profile1.jpg" class="profile-img">
    
      <?php include 'music.php'; ?>
      
       <p>Website ini berisi informasi tentang program studi yang saat ini sedang saya jalani
        dan juga berisi tentang beberapa informasi mengenai kepribadian yang saya miliki, semoga website ini dapat memberikan inforamsi yang 
    bermanfaat bagi para pembacanya. </p>

     <button class="btn fade-in delay2" onclick="alert('Selamat datang!')">Klik Aku</button>

  
  </section>

  <footer>
    <p>© 2026 TI 2026 | Dibuat oleh Razita Kafia Laiyina</p>
  </footer>
</body>
</html>