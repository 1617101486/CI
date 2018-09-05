<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3><?php echo $judul;?></h3>
			</div>
			<div class="module-body">
				<section class="docs">
					<a href="<?php echo('siswa/tambah')?>" class="btn btn-primary">Tambah</a>
					<div class="module-body table">
						<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
							<thead>
								<tr bgcolor="#2f8">
									<th>No</th>
									<th>ID</th>
									<th>Nama Ustadz</th>
									<th>Alamat</th>
									<th class="hidden-480">Tempat Tanggal Lahir</th>
									<th>FOTO</th>
									<th>Status</th>
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
								 	<td><?php echo $s->id ?></td>
								 	<td><?php echo $s->nama_ustadz ?></td>
									<td><?php echo $s->alamat ?></td>
								 	<td class="hidden-480"><?php echo $s->ttl ?></td>
								 	<td><?php echo $s->foto ?></td>
								 	<td><?php echo $s->Status ?></td>
								 	<td class="center">
								 		<?php echo anchor('ustadz/update'.$u->id,'Edit'); ?> |
								 		<?php echo anchor('ustadz/delete/'.$u->id,'Hapus') ?>
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
</div>