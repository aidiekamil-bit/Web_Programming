
<?php
$total_seluruh=0;

function ambilInput($name)
{
    $ambil_all = $_POST[$name];
    return $ambil_all;
} 
function hitungTotal($jumlah, $harga)
{
    $total = $jumlah * $harga;
    return $total; 
}
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $total_bis_pelajar = hitungTotal(ambilInput('pelajar'), 5000);
    $total_bis_umum = hitungTotal(ambilInput('umum'), 8000);
  
   
    $total_seluruh = $total_bis_pelajar + $total_bis_umum;
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
                       <h5 class="mb-2 ">Perhitungan Tarif Tiket Bus</h5> 
                    </div>
                    <div class="card-body">
                        <div class="menu"> Pelajar | Rp. 5.000 </br> Umum | Rp. 8.000</div>
                        
                        <form method="POST">
                            <div class="mb-3 mt-3">
                                <label for="">Pelajar</label>
                                <input type="number" class="form-control" name="pelajar">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="">Umum</label>
                                <input type="number" class="form-control" name="umum">
                            </div>
                            <button class="btn btn-danger w-100">
                                Hitung Total
                            </button> 
                        </form>

                        <?php if ($total_seluruh !== 0):?>

                    <div class="card-footer mt-2">
                        <p>Total Bis Pelajar: Rp. 5.000 X  <?= ambilInput('pelajar')?> | <strong>
                            Rp <?= number_format( $total_bis_pelajar,2,',','.')?>

                                </strong></p>
                    <p>Total Bis Umum: Rp. 8.000 X  <?= ambilInput('umum') ?> | <strong>
                            Rp <?= number_format( $total_bis_umum,2,',','.') ?></strong></p>
                    

                        <p class="fs-5">Total Bayar: <strong>
                            Rp <?= number_format( $total_seluruh,2,',','.')  ?> </strong><p>
                    </div>
                        <?php endif; ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>