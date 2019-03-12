<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD</title>
   
</head>
<body  style="background:url(R.jpg)">

<center>
<br><br>
    <h2>ARTIKEL CAKE PEDIA</h2>
  <br><br>
    <table border="5" cellpadding="10" cellspacing="10" width="80%" >
  <tr>
   
     <th>no</th>
    <th>nama kue</th>
    <th>bahan-bahan</th>
     <th>sejarah</th>
    <th>terkhir di update</th>
    <th>opsi</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["nama"] ?></td>
    <td><?= $x["bahan"];  ?></td>
    <td><?= $x["sejarah"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
    <td>
      <center><button><a href="ubah.php?id=<?= $x["id"]?>">ubah</a></button><br><br><button><a href="hapus.php?id=<?= $x["id"]?>" onclick =" return confirm ('yakin untuk dihapus?');">hapus</a></button></center>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

<br>
<center>
  <br>
<a href="creat.php">Tambah artikel>></a>
<a href="logout.php">Logout>></a>
</center>
  </body>
</html>