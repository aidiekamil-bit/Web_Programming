<?php
require 'config.php';
$nama = $_POST["nama"];
$visi = $_POST["visi"];
$misi = $_POST["misi"];
$foto = $_POST["foto"];

$query_sql = "INSERT INTO tbl_calon_ketua_osis (nama_calon, visi, misi, foto)
                VALUES ('$nama', '$visi', '$misi', '$foto')";

if (mysqli_query($koneksi, $query_sql)){
    header("Location: pendaftaran_calon_ketua.php");

}else {
    echo "Pendaftaran gagal : " . mysqli_error($koneksi);
}
?>