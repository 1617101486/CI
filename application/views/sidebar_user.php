<div class="sidebar">
	<div class="span2">
	<ul class="widget widget-menu unstyled">
		<li class="active"><a href="<?php echo base_url('user'); ?>">
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
		<li><?php
			$crud=new crud();
			$tampil = $crud->siswa();
			while($data=mysqli_fetch_array($tampil)){
			?><!-- Buat Manggil Function -->
			<a href="<?php echo base_url('siswa'); ?>">
				<i class="menu-icon icon-book"></i>Data Siswa
				<b class="label green pull-right"><?php echo $data['h_siswa'] ?> <!-- Buat Manggilnya --> </b></a>
		</li>
		<li><?php
			$crud=new crud();
			$tampil = $crud->kelas();
			while($data=mysqli_fetch_array($tampil)){
			?><!-- Buat Manggil Function -->
			<a href="<?php echo base_url('kelas'); ?>">
				<i class="menu-icon icon-tasks"></i>Data grup
				<b class="label orange pull-right"><?php echo $data['h_kelas'] ?></b></a>
		</li>
		<li><?php
			$crud=new crud();
			$tampil = $crud->pesan();
			while($data=mysqli_fetch_array($tampil)){
			?><!-- Buat Manggil Function -->
			<a href="<?php echo base_url('pesan'); ?>">
				<i class="menu-icon icon-tasks"></i>Data chatting
				<b class="label orange pull-right"><?php echo $data['h_pesan'] ?></b></a>
		</li>
	</ul>
	<ul class="widget widget-menu unstyled">
		<li><a href="<?php echo base_url('login/logout') ?>">s

			<i class="menu-icon icon-signout"></i>Logout </a>
		</li>
	</ul>
	</div>
</div>
<?php }}}}   ?>