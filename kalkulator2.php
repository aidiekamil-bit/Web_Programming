<?php
$hasil = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bilangan1 = $_POST['angka1'];
    $bilangan2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    if ($operator == '+') {
        $hasil = $bilangan1 + $bilangan2;
    } elseif ($operator == '-') {
        $hasil = $bilangan1 - $bilangan2;
    } elseif ($operator == '*') {
        $hasil = $bilangan1 * $bilangan2;
    } elseif ($operator == '/') {
        if ($bilangan2 != 0) {
            $hasil = $bilangan1 / $bilangan2;
        } else {
            echo "<div class='alert alert-danger text-center'>Error: Division by zero</div>";
            exit();
        }
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
            <div class="card-title text-center fw-bold fs-3 mb-3 mt-3">Kalkulator Sederhana
            </div>
            <form method="POST">
                <div><input class="form-control" type="number" name="angka1" placeholder="Masukkan angka pertama" value="<?php echo $bilangan1 ?>"></div>
                <div class="my-3"><input class="form-control" type="number" name="angka2" placeholder="Masukkan angka kedua" value="<?php echo $bilangan2 ?>"></div>
                <select class=" form-select form-control mb-3" aria-label="Default select example" name="operator">
  <option selected>Operasi</option>
  <option value="+">Tambah</option>
  <option value="-">Kurang</option>
  <option value="*">Kali</option>
  <option value="/">Bagi</option>   
</select>
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