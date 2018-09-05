<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3><?php echo $judul;?></h3>
			</div>
			<div class="module-body">
				<section class="docs">

					<div class="w3-table-all">
						<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%" lang="">
							<thead>
								<tr class="">
									<th>No</th>
									<th>Akun</th> 
									<th>email</th>
									<th>Status</th>
									<th>created_at</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody>
								<?php 
									$no = 1;
									foreach ($status as $s) {
								 ?>
								 <tr class="">
								 	<td><?php echo $no++ ?></td>
								 	<td><?php echo $s['kedudukan'] ?></td>
								 	<td class="hidden-480"><?php echo $s['email'] ?></td>
								 	<td><?php if($s['status'] == 'aktif'){ echo "Aktif";}else{ echo "Tidak Aktif";} ?></td>
								 	<td><?php echo date('d F Y',strtotime($s['created_at'])) ?></td>
								 	<td class="center">
								 		<button type="button" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin?')"><?php echo anchor('admin/aktif/'.$s['id_account'],'Aktifkan'); ?></button> 
								 		<button type="button" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')"><?php echo anchor('admin/block/'.$s['id_account'],'Block'); ?></buttn>
								 			<button type="button" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin?')"><?php echo anchor('admin/aktif/'.$s['id_account'],'view'); ?></button>
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