<?php
require 'functions.php';


$mahasiswa = query("SELECT * FROM images");


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Nama Orang tertarik</h1>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan kyword pencaharian" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br><br>


    <br>
    <table border="1px" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Gambar</th>
            <th>Tulisan</th>
        </tr>
        <?php $id = 1; ?>
        <?php foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?= $id; ?></td>
            <td>
                
                <a href="hapus.php?id=<?= $row["No"]; ?>" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a>
            </td>
          
           
            <td><?php echo $row["Nama"] ?></td>
            <td><?php echo $row["Email"] ?></td>
            <td><?php echo $row["Pesan"] ?></td>
             
        </tr>
        <?php $id++; ?>
        <?php endforeach ?>
    </table>
 
      
</body>
</html>
