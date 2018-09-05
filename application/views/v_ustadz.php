<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3><?php echo $judul;?></h3>
			</div>
			<div class="module-body">
				<section class="docs">
					<?php if ($this->session->userdata('kedudukan')=='1'): ?>
					<a href="<?php echo('ustadz/tambah')?>" class="btn btn-primary">Tambah</a>
					<?php endif ?>
					<div class="module-body table">
						<table cellpadding="0" cellspacing="0" border-collapse="0" class="datatable-1 table table-bordered table-striped display" width="100%">
							<thead>
								<tr class="" >
									<th>No</th>
									<th>Nama Ustadz</th>
									<th>Alamat</th>
									<th class="hidden-480">Tempat Tanggal Lahir</th>
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
								 	<td><?php echo $u['nama_ustadz'] ?></td>
									<td><?php echo $u ['alamat'] ?></td>
								 	<td class="hidden-480"><?php echo $u ['ttl'] ?></td>
								 	<td><?php echo $u ['status'] ?></td>
								 	<td class="center">
								 		<?php if ($this->session->userdata('kedudukan')=='3'): ?>
								 		<a href="<?php echo base_url('ustadz/profile?id='.$u['id_ustadz'])?>" type="button" class="btn btn-primary">Pilih</a>
								 		<?php endif ?>

								 		<?php if ($this->session->userdata('kedudukan')=='1'): ?>
									 		<button type="button" class="btn btn-success"><?php echo anchor('ustadz/update/'.$u ['id_ustadz'],'Edit'); ?></button> 
									 		<button type="button" class="btn btn-danger"><buttn onclick="return confirm('Apakah Anda Yakin?')"><?php echo anchor('ustadz/delete/'.$u ['id_ustadz'],'Hapus') ?></buttn></button>
								 		<?php endif ?>
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