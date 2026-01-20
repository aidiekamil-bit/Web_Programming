<?php
$hasil = null;
$bilangan1 = '';
$bilangan2 = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bilangan1 = $_POST['angka1'];
    $bilangan2 = $_POST['angka2'];
    
    if ($bilangan2 != 0) {
        $tinggi_m = $bilangan2 / 100; // konversi cm ke meter
        $hasil = $bilangan1 / ($tinggi_m * $tinggi_m);
    } 
    else {
        echo "<div class='alert alert-danger text-center'>Error: Tinggi badan tidak boleh nol</div>";
        exit();
    }
    
    if ($hasil < 18.49) {
        $hasil = "Kurus (IMT: " . number_format($hasil, 2) . ")";
    }
    elseif ($hasil >= 18.5 && $hasil <= 24.99) {
        $hasil = "Normal (IMT: " . number_format($hasil, 2) . ")";
    }
    elseif ($hasil >= 25 && $hasil <= 29.99) {
        $hasil = "Gemuk (IMT: " . number_format($hasil, 2) . ")";
    }
    elseif ($hasil >= 30) {
        $hasil = "Obesitas (IMT: " . number_format($hasil, 2) . ")";
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow " style="width: 20%;">
        <div class="card-body">
            <div class="card-title text-center fw-bold fs-3 mb-3 mt-3">Indeks Massa Tubuh
            </div>
            <form method="POST">
                <div><input class="form-control" type="number" name="angka1" placeholder="Berat badan" value="<?php echo $bilangan1 ?>"></div>
                <div class="my-3"><input class="form-control" type="number" name="angka2" placeholder="Tinggi badan" value="<?php echo $bilangan2 ?>"></div>

                <button class="btn btn-primary w-100">Hitung</button>

            </form>

            <?php if ($hasil !== null): ?>
                <div class="alert alert-success text-center mt-2">
                    hasil : <?php echo $hasil; ?>
                </div>
            <?php endif; ?>


        </div>
    </div>
</body>

</html>