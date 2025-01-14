<?php
$host="localhost";
$user_db="root";
$pass_db="";
$db="uas";
$koneksi=mysqli_connect($host,$user_db,$pass_db);
mysqli_select_db($koneksi,$db);
if ($koneksi){
    echo "Koneksi Berhasil";
    }else{
        echo "Koneksi Gagal";
}
?>