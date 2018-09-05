<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3><?php echo $judul;?></h3>
			</div>
			<div class="module-body">
				<section class="docs">
					<a href="<?php echo('grup/tambah')?>" class="btn btn-primary">Tambah</a>
					<a href="<?php echo('grup/daftar')?>" class="btn btn-success">Daftar grup</a>
					<div class="module-body table">
						<table cellpadding="0" cellspacing="0" border="0" class="datatable-1  table table-bordered table-striped display" width="100%">
							<thead>
								<tr class="">
									<th>NO</th>
									<th>NAMA GRUP</th>
									<th>TANGGAL</th>
									<th>KETERANGAN</th>
									<th>SURAT</th>
									<th>AYAT</th>
									<th>Action</th> 
								</tr>
							</thead>
							<tbody>
								<?php
									$no = 1;
									foreach($grup as $p){
								?>

									<tr class="">
										<td><?php echo $no++ ?></td>
										<td><?php echo $p->nama_grup ?></td>
										<td><?php echo $p->tanggal ?></td>
										<td><?php echo $p->keterangan ?></td>
										<td><?php echo $p->surat ?></td>
										<td><?php echo $p->ayat ?></td>
										<td class="center">
										<?php if ($this->session->userdata('kedudukan')=='1'): ?>
											<button type="button" class="btn btn-success"><?php echo anchor('grup/update/'.$p->id_grup,'Edit'); ?></button>
											<button type="button" class="btn btn-danger"><?php echo anchor('grup/delete/'.$p->id_grup,'Delete'); ?></button>
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
