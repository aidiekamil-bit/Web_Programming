<?php
$total_seluruh=0;

function ambilInput($name)
{
    $ambil_all = $_POST[$name];
    return $ambil_all;
} 
function hitungTotal($jumlah)
{
    $jumlah=$_POST['total_belanja'];
    if($jumlah >= 200000){
    $hasil= $jumlah * 0.2;

   }
    elseif($jumlah >= 100000){
   
     $hasil= $jumlah * 0.1;
    }
    elseif($jumlah < 100000) {
    $hasil= $jumlah * 1;
    }
        
    

    return $hasil; 
}
if($_SERVER['REQUEST_METHOD'] == "POST")
{

$total_belanja=$jumlah-$hasil;
   
   
   
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
                       <h5 class="mb-2 ">Perhitungan Diskon Belanja</h5> 
                    </div>
                    <div class="card-body">
                        <div class="menu"> Total +> Rp 200.000 | Diskon 20% </br> Total +> Rp 100.000 | Diskon 10% </br>Total < Rp 100.000 | Tidak ada diskon </div>
                        
                        <form method="POST">
                            <div class="mb-3 mt-3">
                                <label for="">Total Belanja</label>
                                <input type="number" class="form-control" name="total_belanja">
                            </div>
                            <button class="btn btn-danger w-100">
                                Hitung Total
                            </button> 
                        </form>

                        <?php if ($total_seluruh !== 0):?>

                    <div class="card-footer mt-2">
                       
                    

                        <p class="fs-5">Total belanja: <strong>
                            Rp <?= $total_belanja  ?> </strong><p>
                    </div>
                        <?php endif; ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>