<?php
$total_seluruh=null;
$jumlah=null;
$harga=null;
function ambilInput($name)
{
    $ambil_all = $_POST[$name];
    return $ambil_all;
} 
function hitungTotal($jumlah, $harga)
{
    $total = $jumlah + $harga;
    return $total; 
}
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $total_gaji = hitungTotal(ambilInput('gaji_pokok'), $jumlah);
    $total_tunjangan = hitungTotal(ambilInput('tunjangan'), $harga);
  
   
    $total_seluruh = $total_gaji + $total_tunjangan;
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
                       <h5 class="mb-2 ">Menghitung Total Gaji karyawan</h5> 
                    </div>
                    <div class="card-body">
                        <div class="menu"></div>
                        
                        <form method="POST">
                            <div class="mb-3 mt-3">
                                <label for="">Gaji Pokok</label>
                                <input type="number" class="form-control" name="gaji_pokok">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="">Tunjangan</label>
                                <input type="number" class="form-control" name="tunjangan">
                            </div>
                            <button class="btn btn-danger w-100">
                                Hitung Total
                            </button> 
                        </form>

                        <?php if ($total_seluruh !== null):?>

                    <div class="card-footer mt-2">
                        

                        <p class="fs-5">Gaji karyawan: <strong>
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