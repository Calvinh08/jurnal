<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "jurnal";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$pola_tidur = $_POST['pola_tidur'];
$prestasi_belajar = $_POST['prestasi_belajar'];
$sering_mengantuk = $_POST['sering_mengantuk'];
$rentang_ranking = $_POST['rentang_ranking'];

// Menyimpan data ke database
$sql = "INSERT INTO responses (nama, kelas, pola_tidur, prestasi_belajar, sering_mengantuk, rentang_ranking)
VALUES ('$nama', '$kelas', '$pola_tidur', '$prestasi_belajar', '$sering_mengantuk', '$rentang_ranking')";

if ($conn->query($sql) === TRUE) {
    echo "Terima Kasih telah mengisi kuisioner kami.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
