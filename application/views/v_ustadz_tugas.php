<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3><?php echo $judul;?></h3>
			</div>
			<div class="module-body">
				<section class="docs">
					<?php if ($this->session->userdata('kedudukan')=='2'): ?>
					<a href="<?php echo('ustadz/tambah')?>" class="btn btn-primary">Tambah</a>
					<?php endif ?>
					<div class="module-body table">
						<table cellpadding="0" cellspacing="0" border-collapse="0" class="datatable-1 table table-bordered table-striped display" width="100%">
							<thead>
								<tr class="" >
									<th>No</th>
									<th>Ustadz</th>
									<th>Siswa</th>
									<th>Surat</th>
									<th>Ayat</th>
									<th>Status</th>
									<th>keterangan</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody>
								<?php 
									$no = 1;
									foreach ($tugas as $t) {
								 ?>
								 <tr class="">
								 	<td><?php echo $no++ ?></td>
								 	<td><?php echo $t['nama_ustadz'] ?></td>
								 	<td><?php echo $t['nama_siswa'] ?></td>
								 	<td><?php echo $t['surat'] ?></td>
								 	<td><?php echo $t['ayat'] ?></td>
								 	<td><?php  if($t ['status'] == 1) { echo "Lulus"; }elseif($t ['status'] == 2){ echo "kurang "; }elseif($t ['status'] == 3){ echo "tidak lulus"; } ?></td>
								 	<td><?php echo $t['keterangan'] ?></td>
								 	<td class="center">

								 		<?php if ($this->session->userdata('kedudukan')=='1'): ?>
									 		<button type="button" class="btn btn-success"><?php echo anchor('ustadz/update_tugas/'.$t ['id_tugas'],'Edit'); ?></button> 
									 		
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