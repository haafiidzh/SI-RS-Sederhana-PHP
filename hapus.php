<?php
include 'koneksi.php';

if (isset($_GET['no_rm'])) {
    $no_rm = $_GET['no_rm'];

    // Hapus data pasien berdasarkan id
    if (hapus($no_rm)) {
        echo "
        <script>
            alert('Data pasien berhasil dihapus.'); 
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Gagal menghapus data pasien.'); 
            window.history.back();
        </script>";
    }
} else {
    echo "ID tidak diberikan.";
}

closeConnection();
?>
