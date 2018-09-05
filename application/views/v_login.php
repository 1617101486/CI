<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN ADMIN</title>
	<link type="text/css" href="<?php base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="<?php base_url() ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="<?php base_url() ?>assets/css/theme.css" rel="stylesheet">
	<link type="text/css" href="<?php base_url() ?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>
				<a class="brand" href="<?php base_url() ?>">LOGIN ADMIN DATA USTADZ</a>
				<div class="nav-collapse navbar-inverse()-collapse">
					<ul class="nav pull-right">
			    		<li><a href="<?php echo base_url('pendaftaran/tambah') ?>">
			    		Sign  Up
						</a></li>
			    		<li><a href="#">
			    		Forgot your password
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
							<?php if ($this->session->flashdata('error')): ?>
								<div class="alert alert-danger"><span class="icon-exclamation-sign"></span>
									<?php echo $this->session->flashdata('error'); ?>
								</div>
							<?php endif; ?>
              				<?php  if ($this->session->flashdata('success')): ?>
								<div class="alert alert-success"><span class="icon-check"></span>
									<?php echo $this->session->flashdata('success'); ?>
								</div>
							<?php endif; ?>
							<div class="control-group"> 
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" name="email" placeholder="Username" value="admin@admin">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
								<input class="span12" type="password" id="inputPassword" name="password" placeholder="Password" value="admin">
								</div>
							</div>
						</div>
						<div class="module-foot">
						<div class="control-group">
							<div class="controls clearfix">
								<button type="submit" class="btn btn-primary pull-right">Login</button>
								<label class="checkbox">
									<input type="checkbox">Remember me
								</label>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div><!--/.wapper-->
</div>
	<div class="footer">
		<div class="container">
				<b class="copyright">&copy; 2018 PRAKERIN <a href="">Versi 1.0</a>  - PT Swamedia Informatika </b> All Powered by <a href="https://plus.google.com/u/0/117183913471757770120" target="_blank">BAR-BAR-CYBER</a> 
			</div>
	</div>
</body>
</html>