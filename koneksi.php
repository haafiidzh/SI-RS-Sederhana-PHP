<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "intan";

$koneksi = new mysqli($host, $username, $password, $dbname);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

//tampil semua pasien
function tampil() {
    global $koneksi;
    $query = "SELECT * FROM pasien";
    return mysqli_query($koneksi, $query);
}

//hapus pasien
function hapus($no_rm) {
    global $koneksi;
    $query = "DELETE FROM pasien WHERE no_rm='$no_rm'";
    return mysqli_query($koneksi, $query);
}

function closeConnection() {
    global $koneksi;
    mysqli_close($koneksi);
}
?>
