<!DOCTYPE html>
<html lang="en">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $judul; ?> | TAHFIDZ</title> <!-- Setiap halaman wajib ada variable judul -->
	<link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
	<link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url() ?>assets/css/theme.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url() ?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel="stylesheet">
	 <style>
	 	.chatku{
	 		background-color: #0088cc;
	 		color: white;
	 		margin-left: 30%;
	 		text-align: right;
	 	}
	 	.tanggalku{
		    display: block;
		    font-size: 13px;
		    color: #a3a3a3;
		    padding-top: 5px;
		    padding-left: 25px;
		    padding-right: 25px;
		    margin-bottom: 15px;
		    text-align: right;
		}
		.tanggalmu{
		    display: block;
		    font-size: 13px;
		    color: #a3a3a3;
		    padding-top: 5px;
		    padding-left: 25px;
		    padding-right: 25px;
		    margin-bottom: 15px;
		}

		.chat-bar{
			resize: none;
			height: 20px;
		}
	 </style>
</head>
<body>
<?php include "navbar.php"; ?>
	<div class="wrapper">
		<div class="container">
		<div class="row">
			<div class="span2/3">
				<?php include "sidebar.php";?>
				<!--/.sidebar-->
			</div>