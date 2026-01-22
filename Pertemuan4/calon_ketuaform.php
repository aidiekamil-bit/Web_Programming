<?php
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
                    <div class="card-header bg-primary text-white" >
                       <h5 class="mb-2 mt-2 ">Calon Ketua Form</h5> 
                    </div>
                    <div class="card-body">
                        <div class="menu"></div>
                        
                        <form method="POST">
                            <div class="mb-3 mt-3">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                             <div class="mb-3 mt-3">
                                <label for="">Kelas</label>
                                <input type="text" class="form-control" name="kelas">
                            </div>
                             <div class="mb-3 mt-3">
                                <label for="">Jurusan</label>
                                <input type="text" class="form-control" name="jurusan">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" name="jurusan">
                            </div>
                            <button class="btn btn-warning w-100">
                            Simpan
                            </button> 
                        </form>

                        <?php if ($nilai !== null):?>

                    <div class="card-footer mt-2">
                       
                    

                        <p class="fs-5">Status Kelulusan: <strong>
                             <?= $nilai?> </strong><p>
                    </div>
                        <?php endif; ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>