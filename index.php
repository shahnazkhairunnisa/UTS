<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
 <!DOCTYPE html>
<html>
<head>

  <title>MY BLOG</title>
</head>

<body  style="background:url(mac.jfif)">
   
   <link rel="stylesheet" type="text/css" href="style1.css">
</head>
  <header>
    
   
 <div class="jumbotron">
  <center><h1>SELAMAT DATANG DI BLOG CAKE</h1></center>
  

</div>

  

  </header>
  
  
  <nav>
    <ul>
      <p><a class="btn btn-primary btn-lg" href="register.php">ADD POST &raquo;</a></p>
      <p><a class="btn btn-primary btn-lg" href="log.php">BACA POST &raquo;</a></p>
    </ul>
  </nav>
  
  
  <?php if(isset($_GET['status'])): ?>
  <p>
    <?php
      if($_GET['status'] == 'sukses'){
        echo "Pendaftaran  berhasil!";
      } else {
        echo "Pendaftaran gagal!";
      }
    ?>
  </p>
  <?php endif; ?>
  
  

      </body>
</html>