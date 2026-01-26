<?php
require 'config.php';
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$jurusan = $_POST["jurusan"];
$alamat = $_POST["alamat"];

$query_sql = "INSERT INTO tbl_siswa (nama, kelas, jurusan, alamat)
                VALUES ('$nama', '$kelas', '$jurusan', '$alamat')";

if (mysqli_query($koneksi, $query_sql)){
    header("Location: kelas.php");

}else {
    echo "Pendaftaran gagal : " . mysqli_error($koneksi);
}
?>