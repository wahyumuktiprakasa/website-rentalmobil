<?php
include("koneksi.php"); // Pastikan koneksi ke database sudah benar

// Ambil data dari form menggunakan POST
$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$pesan = htmlspecialchars($_POST['pesan']);

// Buat query SQL untuk memasukkan data
$sql = "INSERT INTO bukutamu (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

// Eksekusi query
if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil masuk!";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}
?>