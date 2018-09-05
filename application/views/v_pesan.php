<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head"><h3><?php echo $judul;?></div>
			<div class="module-body">
				<section class="docs">
					<?php if ($this->session->userdata('kedudukan')=='2'): ?>
					<a href="<?php echo base_url('pesan/tambah')?>" class="btn btn-primary">Tambah</a>
					<?php endif ?>
					<div class="module-body table">
						<table cellpadding="0" cellspacing="0" border-collapse="0" class="datatable-1 table table-bordered table-striped display" width="100%">
							<thead>
								<tr class="" >
									
									<th>kepada</th>
									<th class="hidden-480">waktu</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody>
								<?php 
									$no = 1;
									foreach ($pesan as $u) {
								 ?>
								 <tr class="">
									<td><?php echo $u ['kepada'] ?></td>
								 	<td><?php echo $u ['waktu'] ?></td>
								 	<td class="center">
								 		
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