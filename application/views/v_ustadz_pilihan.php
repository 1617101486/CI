<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
			<h3><?php echo $judul;?></h3>
			</div>
			<div class="module-body">
				<section class="docs">
					<?php if ($this->session->userdata('kedudukan')=='admin'): ?>
					<a href="<?php echo('ustadz/tambah')?>" class="btn btn-primary">Tambah</a>
					<?php endif ?>
					<div class="module-body table">
						<table cellpadding="0" cellspacing="0" border-collapse="0" class="datatable-1 table table-bordered table-striped display" width="100%">
							<thead>
								<tr class="" >
									<th>No</th>
									<th>ID</th>
									<th>Nama Ustadz</th>
									<th>Nama Siswa</th>
									<th>Jenis Kelas</th>									
									<th>Action</th>
								</tr>
							</thead>

							<tbody>
								<?php 
									$no = 1;
									foreach ($ustadz as $u) {
								 ?>
								 <tr class="">
								 	<td><?php echo $no++ ?></td>
								 	<td><?php echo $u['id_ustadz'] ?></td>
									<td><?php echo $u ['nama_ustadz'] ?></td>
								 	<td ><?php echo $u ['nama_siswa'] ?></td>
								 	<td ><?php echo $u ['jenis_kelas'] ?></td>
								 	<td class="center">
								 	<button type="button" class="btn btn-primary">message</button> 
								 		
								 	</td>
								 </tr>
								 <?php } ?>
							</tbody>

						</table>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>		w