<?php

include "koneksi.php";

	$no_rm = $_POST['no_rm'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jenkel = $_POST['jenkel'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$tgl_masuk = $_POST['tgl_masuk'];
	$no_hp = $_POST['no_hp'];
	$p_jawab = $_POST['p_jawab'];
	$s_pjawab = $_POST['s_pjawab'];
	$no_hp2 = $_POST['no_hp2'];
	$alamat2 = $_POST['alamat2'];
	$kelas = $_POST['kelas'];
	$kamar = $_POST['kamar'];
	$dokter = $_POST['dokter'];
	$rujukan = $_POST['rujukan'];
	$pembiayaan = $_POST['pembiayaan'];
	$dirawatke = $_POST['dirawatke'];


    $update = mysqli_query($koneksi,"UPDATE pasien SET 
	nik='$nik', 
	nama='$nama', 
	tmp_lahir='$tmp_lahir', 
	tgl_lahir='$tgl_lahir', 
	jenkel='$jenkel', 
	agama='$agama',
	alamat='$alamat',
	tgl_masuk='$tgl_masuk',
	no_hp='$no_hp', 
	p_jawab='$p_jawab',
	s_pjawab='$s_pjawab',
	no_hp2='$no_hp2',
	alamat2='$alamat2',
	kelas='$kelas',
	kamar='$kamar',
	dokter='$dokter',
	rujukan='$rujukan',
	pembiayaan='$pembiayaan',
	dirawatke='$dirawatke' WHERE no_rm='$no_rm'"); 

	if ($update) {
		echo "
		<script> alert ('Data Berhasil Disimpan');
		location.href='index.php';</script>
		";
	}else{
		echo "
		<script> alert ('Data gagal Disimpan');
		location.href='index.php';</script>
		";
	}

?>