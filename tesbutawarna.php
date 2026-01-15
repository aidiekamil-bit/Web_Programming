<?php

$nama = null;
$hasil = null;
$hasil1 = null;
$hasil2 = null;
$hasil3 = null;
$hasil4 = null;
$hasil5 = null;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $gambar1 = $_POST['gambar1'];
    $gambar2 = $_POST['gambar2'];
    $gambar3 = $_POST['gambar3'];
    $gambar4 = $_POST['gambar4'];
    $gambar5 = $_POST['gambar5'];
    $gambar6 = $_POST['gambar6'];
    $nama = $_POST['nama'];



    if ($gambar1 == 3) {
        $hasil = "normal";
    } else {
        $hasil = "Terindikasi";
    }    
    if ($gambar2 == 8) {
        $hasil1 = "normal";
    } else {
        $hasil1 = "Terindikasi";
    }
    if ($gambar3 == 4) {
        $hasil2 = "normal";
    } else {
        $hasil2 = "Terindikasi";
    }
    if ($gambar4 == 7) {
        $hasil3 = "normal";
    } else {
        $hasil3 = "Terindikasi";
    }
    if ($gambar5 == 2) {
        $hasil4 = "normal";
    } else {
        $hasil4 = "Terindikasi";
    }
    if ($gambar6 == 6) {
        $hasil5 = "normal";
    } else  {
        $hasil5 = "Terindikasi";
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
    <div class="card shadow" style="width: 40%">
        <H5 class="bg-success text-white p-2">Tes Buta Warna (Simulasi)</h5>
        <div class="card-body">

            <form method="POST">
                <div class="mb-3 ">
                    <p>Nama Peserta</p>
                    <input class="form-control " type="text" name="nama" id="nama">
                </div>
                <div class="row gap-3">
                    <div class="col mb-3 form-control ">
                        <p class="text-center">Gambar 1</p>
                        <img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/3-med.png " class="w-50 mb-3 d-block mx-auto" alt="Gambar Tes Buta Warna">
                        <input class="form-control mb-2" type="number" name="gambar1" id="gambar1" placeholder="Masukkan angka">
                    </div>
                    <div class="col mb-3 form-control ">
                        <p class="text-center">Gambar 2</p>
                        <img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/8-light.png " class="w-50 mb-3 d-block mx-auto" alt="Gambar Tes Buta Warna">
                        <input class="form-control " type="number" name="gambar2" id="gambar2" placeholder="Masukkan angka">
                    </div>
                </div>
                <div class="row gap-3">
                    <div class="col mb-3 form-control">
                        <p class="text-center">Gambar 3</p>
                        <img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/4-med2.png" class="w-50 mb-3 d-block mx-auto" alt="Gambar Tes Buta Warna">
                        <input class="form-control mb-2" type="number" name="gambar3" id="gambar3" placeholder="Masukkan angka">
                    </div>
                    <div class="col mb-3 form-control ">
                        <p class="text-center">Gambar 4</p>
                        <img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/7-light.png" class="w-50 mb-3 d-block mx-auto" alt="Gambar Tes Buta Warna">
                        <input class="form-control mb-2" type="number" name="gambar4" id="gambar4" placeholder="Masukkan angka">
                </div>
                </div>
                <div class="row gap-3">
                    <div class="col mb-3 form-control">
                        <p class="text-center">Gambar 5</p>
                        <img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/2-light.png" class="w-50 mb-3 d-block mx-auto" alt="Gambar Tes Buta Warna">
                        <input class="form-control mb-2" type="number" name="gambar5" id="gambar5" placeholder="Masukkan angka">
                    </div>
                    <div class="col mb-3 form-control ">
                        <p class="text-center">Gambar 6</p>
                        <img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/6-light.png" class="w-50 mb-3 d-block mx-auto" alt="Gambar Tes Buta Warna">
                        <input class="form-control mb-2" type="number" name="gambar6" id="gambar6" placeholder="Masukkan angka">

                    </div>
                </div>


                <button class=" btn btn-success w-100">Cek Hasil Tes</button>
            </form>


            <?php
            if ($nama !== null) : ?>
                <div class=" alert-success mt-2">
                    Nama Peserta : <?php echo $nama; ?>
                </div>
            <?php endif;
            if ($hasil !== null): ?>
                <div class=" alert-success mt-2">
                    Tes 1 : <?php echo $hasil; ?>
                </div>
            <?php endif;
            if ($hasil1 !== null): ?>
                <div class=" alert-success mt-2">
                    Tes 2 : <?php echo $hasil1; ?>
                </div>
            <?php endif;
            if ($hasil2 !== null): ?>
                <div class=" alert-success mt-2">
                    Tes 3 : <?php echo $hasil2; ?>
                </div>
            <?php endif;
            if ($hasil3 !== null): ?>
                <div class=" alert-success mt-2">
                    Tes 4 : <?php echo $hasil3; ?>
                </div>
            <?php endif;
            if ($hasil4 !== null): ?>
                <div class=" alert-success mt-2">
                    Tes 5 : <?php echo $hasil4; ?>
                </div>
            <?php endif;
            if ($hasil5 !== null): ?>
                <div class=" alert-success mt-2">
                    Tes 6 : <?php echo $hasil5; ?>
                </div>
            <?php endif;
            ?>







        </div>
</body>

</html>