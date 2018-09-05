<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
				<i class="icon-reorder shaded"></i>
			</a>
			<a class="brand" href="<?php echo base_url() ?>">TAHFIDZ Al-QUR'AN</a>
			<div class="nav-collapse collapse navbar-inverse-collapse">
				<ul class="nav nav-icons">
				    <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
				    <li><a href="#"><i class="icon-eye-open"></i></a></li>
				    <li><a href="#"><i class="icon-bar-chart"></i></a></li>
				</ul>
				<form class="navbar-search pull-left input-append" action="#">
					<input type="text" class="span3">
					<button class="btn" type="button">
						<i class="icon-search"></i>
					</button>
				</form>
				<ul class="nav pull-right">
				    <li><a href="#"><?php echo $this->session->userdata('nama'); ?> </a></li>
				    <li class="nav-user dropdown">
				    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				    		<img src="<?php echo base_url() ?>assets/images/'$data['poto']" class="nav-avatar" />
				    		<b class="caret"></b>
				    	</a>
				    	<ul class="dropdown-menu" >
				    		<li><a href="#">Your Profile</a></li>
				    		<li><a href="#">Edit Profile</a></li>
				    		<li><a href="#">Account Settings</a></li>
				    		<li class="divinder"></li>
				    		<li><a href="<?php echo base_url('login/logout') ?>">Logout</a></li>
				    	</ul>
				    </li>
				</ul>
			</div>
		</div>
	</div> 
</div>
<!-- /navbar-->