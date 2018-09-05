		<div class="sidebar">
			<div class="span2">
			<ul class="widget widget-menu unstyled">
				<li class="active"><a href="<?php echo base_url('admin'); ?>">
					<i class="menu-icon icon-dashboard"></i>Dashboard</a></li>
				<li>
					<?php
					require "itung.php";
					$crud=new crud();
					$tampil = $crud->ustadz();
					while($data=mysqli_fetch_array($tampil)){
					?><!-- Buat Manggil Function -->
					<a href="<?php echo base_url('ustadz'); ?>">
						<i class="menu-icon icon-book"></i>Data ustadz
						<b class="label green pull-right"><?php echo $data['h_ustadz'] ?> <!-- Buat Manggilnya --> </b></a>
				</li>
		<?php if ($this->session->userdata('kedudukan')=='3'): ?>

				<li>
				    <a href="<?php echo base_url('ustadz/pilihan'); ?>">
						<i class="menu-icon icon-tasks"></i>Ustadz Pilihan Saya
						<b class="label orange pull-right"></b></a>
				</li>
		<?php endif ?>

		<?php if ($this->session->userdata('kedudukan')=='1'): ?>

				<li>
				    <a href="<?php echo base_url('ustadz/pilihan'); ?>">
						<i class="menu-icon icon-tasks"></i>Ustadz Pilihan Saya
						<b class="label orange pull-right"></b></a>
				</li>
		<?php endif ?>

				<li>
					
					<a href="<?php echo base_url('siswa'); ?>">
						<i class="menu-icon icon-book"></i>Data Siswa
						<b class="label green pull-right"> <!-- Buat Manggilnya --> </b></a>
				</li>
		<?php if ($this->session->userdata('kedudukan')=='1'): ?>
			
				<li>
					<a href="<?php echo base_url('admin/status'); ?>">
						<i class="menu-icon icon-book"></i>Data Akun
						<b class="label green pull-right"> <!-- Buat Manggilnya --> </b></a>
				</li>
		<?php endif ?>

			
				<li>
					<a href="<?php echo base_url('Ustadz/tugas'); ?>">
						<i class="menu-icon icon-book"></i>Tugas
						<b class="label green pull-right"> <!-- Buat Manggilnya --> </b></a>
				</li>

				<li>
					<a href="<?php echo base_url('grup'); ?>">
						<i class="menu-icon icon-tasks"></i>Data grup
						<b class="label orange pull-right"></b></a>
					</li>
					<li>
				    <a href="<?php echo base_url('pesan/pesan'); ?>">
						<i class="menu-icon icon-tasks"></i>Message
						<b class="label orange pull-right"></b></a>
				</li>

			</ul>
			<ul class="widget widget-menu unstyled">
				<li><a href="<?php echo base_url('login/logout') ?>">

					<i class="menu-icon icon-signout"></i>Logout </a>
				</li>
			</ul>
			</div>
		</div>
		<?php }  ?>