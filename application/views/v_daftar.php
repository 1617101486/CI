<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3><?php echo $judul;?></h3>
			</div>
			<div class="module-body">
				<section class="docs">
					<div class="module-body table">
						<table cellpadding="0" cellspacing="0" border="0" class="datatable-1  table table-bordered table-striped display" width="100%">
							<thead>
								<tr class="">
									<th>NO</th>
									<th>NAMA GRUP</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no = 1;
									foreach($grup as $g);{
								?>
									<tr class="">
										<td><?php echo $no++ ?></td>
										<td><?php echo $g->nama_grup ?></td>
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
