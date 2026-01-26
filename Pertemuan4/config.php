<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "db_voting";

$koneksi = mysqli_connect($host, $username, $pass, $db);

 if (!$koneksi){
    die("Koneksi tidak berhasil : " . mysqli_connect_error());
  }else{
    echo "Pendaftaran sudah direkap " ;
  }


?>


