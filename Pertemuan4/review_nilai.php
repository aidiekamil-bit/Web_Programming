<?php
$nilai=null;
$total_seluruh=null;
$cetakPredikat=null;

function cekKelulusan($data_nilai)
{
     if ($data_nilai >= 75 ){
    $nilai = "Lulus";
   }
   else {
    $nilai = "Tidak lulus";
   }
   return $nilai;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ambil_nilai = $_POST['nilai'];
  $cetakPredikat = cekKelulusan($ambil_nilai);
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
                       <h5 class="mb-2 ">Penentuan Status Kelulusan Siswa</h5> 
                    </div>
                    <div class="card-body">
                        <div class="menu"> Nilai +> 75 | lulus </br> Nilai < 75 | Tidak Lulus</div>
                        
                        <form method="POST">
                            <div class="mb-3 mt-3">
                                <label for="">Nilai</label>
                                <input type="number" class="form-control" name="nilai">
                            </div>
                            <button class="btn btn-danger w-100">
                                Hitung Total
                            </button> 
                        </form>

                        <?php if ($cetakPredikat !== null):?>

                    <div class="card-footer mt-2">
                       
                    <p class="fs-4">Nilai: <strong> <?= $ambil_nilai ?> </strong> </p>
                           

                        <p class="fs-5">Status Kelulusan: <strong>
                             <?= $cetakPredikat?> </strong><p>
                    </div>
                        <?php endif; ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>