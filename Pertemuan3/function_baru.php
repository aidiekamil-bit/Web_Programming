<?php
$total_seluruh= 0;
$jumlah_nasi_goreng= null;
$jumlah_mie_ayam=null;
$jumlah_es_jeruk= null;
$total_nasi_goreng= 0;
$total_mie_ayam=0;
$total_es_jeruk=0;
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
    $total_nasi_goreng = hitungTotal(ambilInput('nasi_goreng'), 12000);
    $total_mie_ayam = hitungTotal(ambilInput('mie_ayam'), 10000);
   $total_es_jeruk = hitungTotal(ambilInput('es_jeruk'), 5000);
   
    $total_seluruh = $total_nasi_goreng + $total_mie_ayam + $total_es_jeruk;
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
                       <h5 class="mb-2 ">Kasir Kantin Sekolah (tanpa function)</h5> 
                    </div>
                    <div class="card-body">
                        <div class="menu"> Nasi Goreng | Rp. 12.000 </br> Mie Ayam | Rp.10.000</div>
                        
                        <form method="POST">
                            <div class="mb-3 mt-3">
                                <label for="">Nasi Goreng</label>
                                <input type="number" class="form-control" name="nasi_goreng">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="">Mie Ayam</label>
                                <input type="number" class="form-control" name="mie_ayam">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="">Es Jeruk</label>
                                <input type="number" class="form-control" name="es_jeruk">
                            </div>
                            <button class="btn btn-danger w-100">
                                Hitung Total
                            </button> 
                        </form>

                        <?php if ($total_seluruh !== 0):?>

                    <div class="card-footer mt-2">
                        <p>Total Nasi Goreng: Rp.12.000 X  <?= ambilInput('nasi_goreng')?> | <strong>
                            Rp <?= number_format( $total_nasi_goreng,2,',','.')?>

                                </strong></p>
                    <p>Total Mie Ayam: Rp.10.000 X  <?= ambilInput('mie_ayam') ?> | <strong>
                            Rp <?= number_format( $total_mie_ayam,2,',','.') ?></strong></p>
                    <p>Total Mie Ayam: Rp.5.000 X  <?= ambilInput('es_jeruk') ?> | <strong>
                            Rp <?= number_format( $total_es_jeruk,2,',','.')  ?></strong></p>


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