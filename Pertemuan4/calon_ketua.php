<?php
include 'config.php'

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h2></h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Calon</th>
            <th>Visi</th>
            <th>Misi</th>
            <th>Foto</th>
        </tr>
        
    <?php
    
    $data = mysqli_query($koneksi, "Select * From tbl_calon_ketua_osis");
    foreach ($data as $d):?>

    
    <tr>
            
            <td> <?= $d['id_calon']?></td>
            <td> <?= $d['nama_calon']?></td>
            <td> <?= $d['visi']?></td>
             <td> <?= $d['misi']?></td>
            <td> <?= $d['foto']?></td>

</tr>
        <?php endforeach; ?>
    </table>
</body>
</html>