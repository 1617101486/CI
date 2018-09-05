<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head"><h3><?php echo $judul;?></h3></div>
			<div class="module-body">
				<section class="docs">
					<form class="form-horizontal row-fluid" action="<?php echo('../edit_simpan')?>" method="post">
		
						<div class="control-group">
							<label class="control-label" for="basicinput">Nama Ustadz</label>
							<div class="controls">
								<input type="text" id="basicinput" name="nama" placeholder="Nama Ustadz" class="span8" required value="<?php echo 
								$ustadz[0]['nama_ustadz']; ?>">
							</div>
						</div>
						<div class="control-group"> 
						     <label class="control-label" for="basicinput">Alamat</label>
						      <div class="controls">
							     <textarea class="span8" id="span8" rows="5" name="alamat" required value="<?php echo $ustadz[0]['alamat']; ?>"></textarea>
						     </div>
					    </div>
					    	
							<div class="control-group">
							<label class="control-label" for="basicinput">Status</label>
							<div class="controls">
								<label class="radio inline">
									<input type="radio" name="status" id="optionsRadios1" value="aktif" required value="<?php echo  $ustadz[0]['status']; ?>">
									aktif
								</label>
								<label class="radio inline">
									<input type="radio" name="status" id="optionsRadios1" value="tidak aktif" required value="<?php echo  $ustadz[0]['status']; ?>">
									tidak aktif
								</label>
							</div>
							</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">Tempat Tanggal Lahir</label>
							<div class="controls">
								<input type="text" id="basicinput" name="ttl" placeholder="Tempat tanggal lahir" value="<?php echo $ustadz[0]['ttl']; ?>" class="span5" required >
								<p><code>*Contoh : Cianjur, 01-12-2000</code></p>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<buttn onclick="return confirm('Apakah Anda Yakin?')"><button name="update" type="submit" class="btn btn-primary">Simpan</button></buttn>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
</div>