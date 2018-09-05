<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3><?php echo $judul;?></h3>
			</div>
			<div class="module-body">
				<section class="docs">
					<?php if ($this->session->userdata('kedudukan')=='1'): ?>
					<a href="<?php echo('siswa/tambah')?>" class="btn btn-primary">Tambah</a>
					<?php endif ?>
					<div class="module-body table">
						<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%" lang="">
							<thead>
								<tr class="">
									<th>No</th>
									<th>NamaSiswa</th>
									<th class="hidden-480">TTL</th>
									<th>Alamat</th>
									<th>id_kelas</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody>
								<?php 
									$no = 1;
									foreach ($siswa as $s) {
								 ?>
								 <tr class="">
								 	<td><?php echo $no++ ?></td>
								 	<td><?php echo $s ['nama_siswa'] ?></td>
								 	<td class="hidden-480"><?php echo $s ['ttl'] ?></td>
								 	<td><?php echo $s ['alamat'] ?></td>
								 	<td><?php echo $s ['id_kelas'] ?></td>
								 	<td class="center">
								 		<?php if ($this->session->userdata('kedudukan')=='3'): ?>
								 		        <button type="button" class="btn btn-primary">message</button>
								 			<?php endif ?> 
								 		<?php if ($this->session->userdata('kedudukan')=='1'): ?>
										 		<button type="button" class="btn btn-success"><?php echo anchor('siswa/update/'.$s ['id_siswa'],'Edit'); ?></button> 
										 		<button type="button" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')"><?php echo anchor('siswa/delete/'.$s ['id_siswa'],'Hapus') ?></button></button>
								 			<?php endif ?>
								 	</td>
								 </tr>
								 <?php } ?>

						   </table>
				    	</div>	
				   </tbody>
				</section>
			</div>
		</div>
	</div>
</div>