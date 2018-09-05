<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head"><h3><?php echo $judul;?></h3></div>
			<div class="module-body">
				<section class="docs">
					<form class="form-horizontal row-fluid" action="<?php echo base_url('ustadz/edit_tugas')?>" method="post">
						<div class="control-group">
							<label class="control-label" for="basicinput">Siswa</label>
							<div class="controls">
								<input type="hidden" id="basicinput" name="id_t"  class="span8" required value="<?php echo 
								$tugas[0]['id_tugas'] ?>" readonly>
								<input type="text" id="basicinput" name="surat" placeholder="Nama siswa" class="span8" required value="<?php echo 
								$tugas[0]['nama_siswa']; ?>" readonly>
							</div>
						</div>					    	
						
						<div class="control-group">
							<label class="control-label" for="basicinput">surat</label>
							<div class="controls">
								<input type="text" id="basicinput" name="surat" placeholder="Nama Ustadz" class="span8" required value="<?php echo 
								$tugas[0]['surat']; ?>">
							</div>
						</div>					    	
							<div class="control-group">
							<label class="control-label" for="basicinput">ayat</label>
							<div class="controls">
									<input type="text" name="ayat"  required value="<?php echo  $tugas[0]['ayat']; ?>">
						    </div>
					    </div>
					    <div class="control-group">
							<label class="control-label" for="basicinput">Status</label>
							<div class="controls">
								<select class="form-control" name="status">
									<option <?php if($tugas[0]['status'] == 1){echo "selected"; }?> value="1">Lulus</option>
									<option <?php if($tugas[0]['status'] == 2){echo "selected"; }?>value="2">Kurang</option>
									<option <?php if($tugas[0]['status'] == 3){echo "selected"; }?> value="3">Tidak Lulus</option>
								</select>
						    </div>
					    </div>
						<div class="control-group"> 
						     <label class="control-label" for="basicinput">keterangan</label>
						      <div class="controls">
							     <textarea class="span8" id="span8" rows="5" name="keterangan" required value="<?php echo $tugas[0]['keterangan']; ?>"></textarea>
						    </div>
					    </div>
					    	<div class="control-group pull-right">
								<div class="controls">
								<a href="<?php echo base_url('ustadz/tugas') ?>" class="btn btn-danger">Kembali</a>
								<buttn onclick="return confirm('Apakah Anda Yakin?')"><button name="update" type="submit" class="btn btn-primary">Edit</button></buttn>
								</div>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
</div>