<html lang="en"><head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?=ASET;?>/images/favicon-32x32.png" type="image/png">
	<!--plugins-->
	<link href="<?=ASET;?>/plugins/simplebar/css/simplebar.css" rel="stylesheet">
	<link href="<?=ASET;?>/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
	<link href="<?=ASET;?>/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="<?=ASET;?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=ASET;?>/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="<?=ASET;?>/css/app.css" rel="stylesheet">
	<link href="<?=ASET;?>/css/icons.css" rel="stylesheet">

	<title>Dashtreme - Multipurpose Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme1">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<?php ("aplikasi/views/bagian/bagian_kiri.php");?>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php ("aplikasi/views/bagian/bagian_atas.php");?>
		<!--end header -->
		<!--start page wrapper -->
		 <!--start content-->
         <main class="page-content">
            <!--breadcrumb-->
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header bg-dark text-white">
                            <h2 align="center"><strong>DAFTAR PESANAN</strong></h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered mb-0">
                                <thead class="table-success text-center">
                                    <tr>
                                        <th scope="col">
                                            Nomor Penawaran
                                        </th>

                                        <th scope="col">
                                            Tanggal Pesanan
                                        </th>
                                        <th scope="col">
                                            Tanggal Penawaran
                                        </th>
                                        <th scope="col">
                                            Pelanggan
                                        </th>
                                        <th scope="col">
                                            Total Pesanan
                                        </th>

                                        <th scope="col">
                                            Lihat
                                        </th>
                                        <th scope="col">
                                            Edit
                                        </th>
                                        <th scope="col">
                                            Delete
                                        </th>
                                        <th scope="col">
                                            Kirim
                                        </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">

                                            <a href="<?= APLIKASI; ?>/terima/tampil" button class="btn btn-light btn-sm"> LIHAT </button> </a>

                                        </td>

                                        <td class="text-center">

                                            <a href="<?= APLIKASI; ?>/terima/edit" button class="btn btn-warning btn-sm"> EDIT </button> </a>

                                        </td>
                                        <td class="text-center">

                                            <a href="<?= APLIKASI; ?>/terima/hapus" button class="btn btn-danger btn-sm "> DELETE </button> </a>

                                        </td>
                                        <td class="text-center">

                                            <a href="<?= APLIKASI; ?>/kirim/input" button class="btn btn-danger btn-sm"> KIRIM </button> </a>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


                    </div>

                </div>

            </div>

    </div>


    <!--end breadcrumb-->



    </main>
    <!--end page main-->
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
		<!--End Back To Top Button-->
		<?php ("aplikasi/views/bagian/bagian_bawah.php");?>
	<!--end wrapper-->
	<!--start switcher-->
	<?php ("aplikasi/views/bagian/bagian_kanan.php");?>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="<?=ASET;?>/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="<?=ASET;?>/js/jquery.min.js"></script>
	<script src="<?=ASET;?>/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="<?=ASET;?>/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="<?=ASET;?>/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="<?=ASET;?>/js/app.js"></script>


</body></html>