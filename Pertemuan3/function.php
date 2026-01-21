<?php
$total_seluruh= 0;
$total_nasi_goreng= 0;
$total_mie_ayam= 0;
$jumlah_mie_ayam= 0;
$jumlah_nasi_goreng = 0;

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // ambil inputan
    $jumlah_nasi_goreng = $_POST['nasi_goreng'];
    $jumlah_mie_ayam = $_POST['mie_ayam'];

    // olah data untuk hitung 
    $total_nasi_goreng = $jumlah_nasi_goreng * 12000;
    $total_mie_ayam = $jumlah_mie_ayam * 10000;

    // total seluruh
    $total_seluruh = $total_nasi_goreng + $total_mie_ayam;
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
                            <button class="btn btn-danger w-100">
                                Hitung Total
                            </button> 
                        </form>

                        <?php if ($total_seluruh !== 0):?>

                    <div class="card-footer mt-2">
                        <p>Total Nasi Goreng: Rp.12.000 X  <?= $jumlah_nasi_goreng ?> | <strong>
                            Rp <?= number_format( $total_nasi_goreng,2,',','.')?>

                                </strong></p>
                         <p>Total Mie Ayam: Rp.10.000 X  <?= $jumlah_mie_ayam ?> | <strong>
                            Rp <?= $total_mie_ayam ?></strong></p>
                        <p class="fs-5">Total Bayar: <strong>
                            Rp <?= $total_seluruh ?> </strong><p>
                    </div>
                        <?php endif; ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>