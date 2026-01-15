
<?php
$hasil = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nilai = $_POST['nilai'];
   

    if ($nilai > 75) {
    $kategori = "lulus";
} else {$kategori = "tidak lulus";
    }
}
?>









<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="UTF-8">
    <title>Penjumlahan PHP</title>


    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>




<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow" style="width: 30%">
        <div class="card-body mt-3 ">
            <H5 class="card-title text-center">Kalkulasi Nilai Siswa</h5>
            <form method="POST">
                <div class="mb-3">
                    <input class="form-control" type="number" name="nilai" id="nilai" placeholder="Masukkan nilai">
                        
                </div>
               
                <button class=" btn btn-primary w-100"> Hitung </button>
            </form>


        <?php if ($kategori !== null): ?>
            <div class="alert alert-success text-center mt-2">
                Hasil : <?php echo $kategori; ?>
            </div>
            <?php endif; ?>






        </div>
</body>
</html>


