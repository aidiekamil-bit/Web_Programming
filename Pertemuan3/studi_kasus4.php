<?php
$total_seluruh=null;
$jumlah=null;
$banyak_data=null;
function ambilInput($name)
{
    $ambil_all = $_POST[$name];
    return $ambil_all;
} 
function hitungTotal($jumlah, $materi)
{
    $total = $jumlah + $jumlah + $jumlah / $materi == 3;
    return $total; 
}
if($_SERVER['REQUEST_METHOD'] == "POST")
{
   
    $total_nilai = hitungTotal(ambilInput('mtk'), $jumlah);
     $total_nilai = hitungTotal(ambilInput('bahasa_indonesia'), $jumlah);
      $total_nilai = hitungTotal(ambilInput('nilai_produktif'), $jumlah);
     

    $total_seluruh = $total_nilai / hitungTotal($materi);
   
    
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-danger text-white" >
                       <h5 class="mb-2 ">Menghitung Rata-rata Nilai Siswa</h5> 
                    </div>
                    <div class="card-body">
                        <div class="menu"></div>
                        
                        <form method="POST">
                            <div class="mb-3 mt-3">
                                <label for="">MTK</label>
                                <input type="number" class="form-control" name="mtk">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="">B.Indonesia</label>
                                <input type="number" class="form-control" name="bahasa_indonesia">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="">Nilai Produktif</label>
                                <input type="number" class="form-control" name="nilai_produktif">
                            </div>
                            <button class="btn btn-danger w-100">
                                Hitung Total
                            </button> 
                        </form>

                        <?php if ($total_seluruh !== null):?>

                    <div class="card-footer mt-2">
                        

                        <p class="fs-5">Nilai Rata-rata: <strong>
                            <?= $total_seluruh  ?> </strong><p>
                    </div>
                        <?php endif; ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>