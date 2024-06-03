<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Detail Pasien</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }

        th {
            width: 20%;
        }

        .special {
            margin-bottom: 10px;
        }

        .special2 {
            width: 55%;
        }



        .tabel,
        .tabel th,
        .tabel td {
            border: 0px solid black;
            margin-left: 10px;
        }

        .tabel th,
        .tabel td {
            padding: 0px;
            text-align: left;
        }

        .tabel th {
            width: 20%;
        }

        .tabel2,
        .tabel2 th,
        .tabel2 td {
            border: 0px solid black;
            margin-left: 10px;
        }

        .tabel2 {
            width: 100%;
        }

        .tabel2 td {
            padding: 10px;
        }

        .tabel2 th {
            width: 10%;
        }

        .tabel2 input {
            width: 140px;
        }

        .tengah {
            width: 50px;
        }

        /* Added styles for HALAMAN UTAMA */
        .main-content {
            padding: 20px;
        }

        .separator {
            border: none;
            border-top: 1px solid #ccc;
            margin: 10px 0;
        }

        .judul {
            margin-bottom: 20px;
        }

        .subjudul {
            font-size: 20px;
            text-align: center;
        }

        .atas {
            display: flex;
            justify-content: space-between;
        }

        .atas div {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .atas div input {
            width: 70px;
        }

        .radiobtt {
            display: flex;
        }

        .radiobtt label {
            width: 20%;
        }

        .radio-group {
            width: 50%;
            display: flex;
            gap: 30px;
            /* justify-content: ; */
        }

        .form-container {
            background-color: #f9f9f9;
            margin: 10px 120px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
            padding: 0px 10px;
        }

        .form-control {
            width: 100%;
            height: 40px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
        }

        .pertama {
            display: flex;
            justify-content: baseline;
            gap: 30px;
        }

        .btn-submit {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #3e8e41;
        }

        .uagama {
            margin-left: 10px;
            border: 0px solid black;
        }

        .uagama td {
            padding-right: 30px;
        }

        .tnormal {
            margin-left: 10px;
        }

        .tnormal th {
            width: 145px;
        }

        .nope {
            margin-right: 0px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="dist/img/logo-intan.jpg" class="brand-image img-circle elevation-1" style="opacity:.8">
                <span class="brand-text font-weight-light">Sistem Rawat Inap</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview">
                            <a href="index.php" class="nav-link">
                                <i class="fa-solid fa-users"></i>
                                <p>
                                    &nbsp &nbspData Pasien
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="tambah.php" class="nav-link">
                                <i class="fa-solid fa-user-plus"></i>
                                <p>
                                    &nbsp &nbspTambah Pasien
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <section class="content">
                <div class="container-fluid main-content">
                    <!-- HALAMAN UTAMA -->
                    <?php
                    include "koneksi.php";

                    if (isset($_GET['no_rm'])) {
                        $no_rm = $_GET['no_rm'];

                        $query = "SELECT * FROM pasien WHERE no_rm='$no_rm'";
                        $result = mysqli_query($koneksi, $query);

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                    ?>

                            <div class="form-container">
                                <form method="POST" action="simpan.php">
                                    <div class="atas">
                                        <h1 class="judul">Detail Data Pasien</h1>
                                        <div>
                                            <label for="no_rm">No. RM</label>
                                            <input type="text" id="no_rm" name="no_rm" required class="form-control" readonly value="<?php echo $row['no_rm']; ?>">
                                        </div>
                                    </div>

                                    <!-- SUBJUDUL -->
                                    <div class="separator"></div>
                                    <p class="subjudul">Data Pasien</p>
                                    <div class="separator"></div>
                                    <!-- /SUBJUDUL -->


                                    <div class="form-group">
                                        <label for="nama">Nama Pasien</label>
                                        <input readonly type="text" id="nama" name="nama" required class="form-control" value="<?php echo $row['nama']; ?>">
                                    </div>

                                    <table class="tabel">
                                        <tr>
                                            <th><label for="nik">NIK</label></th>
                                            <td><input readonly type="text" id="nik" name="nik" required class="form-control special" value="<?php echo $row['nik']; ?>"></td>
                                            <td class="special2">
                                                <table class="uagama">
                                                    <th><label for="agama">Agama</label></th>
                                                    <td>
                                                        <select disabled name="agama" id="agama" required class="form-control">
                                                            <option value="-">-</option>
                                                            <option value="Islam" <?php if ($row['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                                                            <option value="Kristen" <?php if ($row['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                                                            <option value="Katolik" <?php if ($row['agama'] == 'Katolik') echo 'selected'; ?>>Katolik</option>
                                                            <option value="Hindu" <?php if ($row['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                                                            <option value="Buddha" <?php if ($row['agama'] == 'Buddha') echo 'selected'; ?>>Buddha</option>
                                                            <option value="Konghucu" <?php if ($row['agama'] == 'Konghucu') echo 'selected'; ?>>Konghucu</option>
                                                        </select>
                                                    </td>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="jenkel">Jenis Kelamin</label></th>
                                            <td colspan="2">
                                                <div class="radio-group">
                                                    <label><input disabled type="radio" name="jenkel" value="Laki-laki" <?php if ($row['jenkel'] == 'Laki-laki') echo 'checked'; ?> required> Laki-laki</label>
                                                    <label><input disabled type="radio" name="jenkel" value="Perempuan" <?php if ($row['jenkel'] == 'Perempuan') echo 'checked'; ?>> Perempuan</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="tmp_lahir">Tempat Lahir</label></th>
                                            <td>
                                                <input readonly type="text" id="tmp_lahir" name="tmp_lahir" required class="form-control special" value="<?php echo $row['tmp_lahir']; ?>">
                                            </td>
                                            <td class="special2">
                                                <table class="uagama">
                                                    <th><label for="no_hp">No. Telp</label></th>
                                                    <td><input readonly type="text" id="no_hp" name="no_hp" required class="form-control nope" value="<?php echo $row['no_hp']; ?>"></td>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="tgl_lahir">Tanggal Lahir</label></th>
                                            <td>
                                                <input readonly type="date" id="tgl_lahir" name="tgl_lahir" required class="form-control special" value="<?php echo $row['tgl_lahir']; ?>">
                                            </td>
                                            <td>
                                                <table class="uagama">
                                                    <th><label for="tgl_masuk">Tanggal Masuk</label></th>
                                                    <td><input readonly type="date" id="tgl_masuk" name="tgl_masuk" required class="form-control" value="<?php echo $row['tgl_masuk']; ?>"></td>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input readonly type="text" id="alamat" name="alamat" required class="form-control" value="<?php echo $row['alamat']; ?>">
                                    </div>

                                    <!-- SUBJUDUL -->
                                    <div class="separator"></div>
                                    <p class="subjudul">Data Penanggung Jawab</p>
                                    <div class="separator"></div>
                                    <!-- /SUBJUDUL -->

                                    <div class="form-group">
                                        <label for="p_jawab">Nama Penanggung Jawab</label>
                                        <input readonly type="text" id="p_jawab" name="p_jawab" required class="form-control" value="<?php echo $row['p_jawab']; ?>">
                                    </div>

                                    <table class="tabel">
                                        <tr>
                                            <th><label for="no_hp2">No. Telp</label></th>
                                            <td><input readonly type="text" id="no_hp2" name="no_hp2" required class="form-control special" value="<?php echo $row['no_hp2']; ?>"></td>
                                            <td class="special2">
                                                <table class="uagama">
                                                    <th><label for="s_pjawab">Status</label></th>
                                                    <td>
                                                        <select disabled name="s_pjawab" id="s_pjawab" required class="form-control">
                                                            <option value="-">-</option>
                                                            <option value="Ayah" <?php if ($row['s_pjawab'] == 'Ayah') echo 'selected'; ?>>Ayah</option>
                                                            <option value="Ibu" <?php if ($row['s_pjawab'] == 'Ibu') echo 'selected'; ?>>Ibu</option>
                                                            <option value="Saudara" <?php if ($row['s_pjawab'] == 'Saudara') echo 'selected'; ?>>Saudara</option>
                                                            <option value="Suami" <?php if ($row['s_pjawab'] == 'Suami') echo 'selected'; ?>>Suami</option>
                                                            <option value="Istri" <?php if ($row['s_pjawab'] == 'Istri') echo 'selected'; ?>>Istri</option>
                                                        </select>
                                                    </td>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="form-group">
                                        <label for="alamat2">Alamat</label>
                                        <input readonly type="text" id="alamat2" name="alamat2" required class="form-control" value="<?php echo $row['alamat2']; ?>">
                                    </div>

                                    <!-- SUBJUDUL -->
                                    <div class="separator"></div>
                                    <p class="subjudul">Perawatan</p>
                                    <div class="separator"></div>
                                    <!-- /SUBJUDUL -->

                                    <table class="tabel2">
                                        <tr>
                                            <th>Kelas</th>
                                            <td class="tengah">
                                                <select disabled name="kelas" id="kelas" required class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="1" <?php if ($row['kelas'] == '1') echo 'selected'; ?>>1</option>
                                                    <option value="2" <?php if ($row['kelas'] == '2') echo 'selected'; ?>>2</option>
                                                    <option value="3" <?php if ($row['kelas'] == '3') echo 'selected'; ?>>3</option>
                                                    <option value="VIP" <?php if ($row['kelas'] == 'VIP') echo 'selected'; ?>>VIP</option>
                                                    <option value="VVIP" <?php if ($row['kelas'] == 'VVIP') echo 'selected'; ?>>VVIP</option>
                                                </select>
                                            </td>

                                            <th>Rujukan</th>
                                            <td class="tengah">
                                                <select disabled name="rujukan" id="rujukan" required class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Poli" <?php if ($row['rujukan'] == 'Poli') echo 'selected'; ?>>Poli</option>
                                                    <option value="UGD" <?php if ($row['rujukan'] == 'UGD') echo 'selected'; ?>>UGD</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Kamar</th>
                                            <td>
                                                <select disabled name="kamar" id="kamar" required class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Melati" <?php if ($row['kamar'] == 'Melati') echo 'selected'; ?>>Melati</option>
                                                    <option value="Anggrek" <?php if ($row['kamar'] == 'Anggrek') echo 'selected'; ?>>Anggrek</option>
                                                    <option value="Flamboyan" <?php if ($row['kamar'] == 'Flamboyan') echo 'selected'; ?>>Flamboyan</option>
                                                    <option value="Tulip" <?php if ($row['kamar'] == 'Tulip') echo 'selected'; ?>>Tulip</option>
                                                </select>
                                            </td>

                                            <th>Pembiayaan</th>
                                            <td>
                                                <select disabled name="pembiayaan" id="pembiayaan" required class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Umum" <?php if ($row['pembiayaan'] == 'Umum') echo 'selected'; ?>>Umum</option>
                                                    <option value="BPJS" <?php if ($row['pembiayaan'] == 'BPJS') echo 'selected'; ?>>BPJS</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Dokter Pengirim</th>
                                            <td>
                                                <select disabled name="dokter" id="dokter" required class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="dr. Rudi" <?php if ($row['dokter'] == 'dr. Rudi') echo 'selected'; ?>>dr. Rudi</option>
                                                    <option value="dr. Budi" <?php if ($row['dokter'] == 'dr. Budi') echo 'selected'; ?>>dr. Budi</option>
                                                    <option value="dr. Joko" <?php if ($row['dokter'] == 'dr. Joko') echo 'selected'; ?>>dr. Joko</option>
                                                </select>
                                            </td>

                                            <th>Dirawat Ke</th>
                                            <td>
                                                <select disabled name="dirawatke" id="dirawatke" required class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="1" <?php if ($row['dirawatke'] == '1') echo 'selected'; ?>>1</option>
                                                    <option value="2" <?php if ($row['dirawatke'] == '2') echo 'selected'; ?>>2</option>
                                                    <option value="3" <?php if ($row['dirawatke'] == '3') echo 'selected'; ?>>3</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>

                                    <br>
                                    <button type="button" class="btn btn-info" onclick="goBack()">Kembali</button>

                            </div>
                            </form>

                    <?php
                        } else {
                            echo "<p>Data pasien tidak ditemukan.</p>";
                        }
                    }
                    ?>

                </div>
            </section>
        </div>

        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script>
        // Fungsi untuk kembali ke halaman sebelumnya
        function goBack() {
            window.history.back();
        }
    </script>
    <script src="https://kit.fontawesome.com/d89a21a1ce.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>