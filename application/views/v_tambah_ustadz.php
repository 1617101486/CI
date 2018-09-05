<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head"><h3><?php echo $judul;?></h3></div>
			<div class="module-body">
				<section class="docs">
					<form class="form-horizontal row-fluid" action="<?php echo('input')?>" method="post">
						<div class="control-group">
							<label class="control-label" for="basicinput">Nama Ustad</label>
							<div class="controls">
								<input type="text" id="basicinput" name="nama_ustadz" placeholder="Nama Ustadz" class="span8" required >
							</div>
						</div>
						<div class="control-group">
						    <label class="control-label" for="basicinput">Alamat</label>
						    <div class="controls">
							    <textarea class="span8" id="span8" rows="5" name="alamat" required=""></textarea>
						    </div>
					    </div>
						<div class="control-group">
							<label class="control-label" for="basicinput">Tempat Tanggal Lahir</label>
							<div class="controls">

								<div class="span8">
									<input type="text" id="basicinput" name="ttl" placeholder="Tempat tanggal lahir" class="span12" required >
									<p><code>*Contoh :CIanjur, 01-12-2000</code></p>
								</div>
							</div>
						</div>
					   
						<div class="control-group">
							<label class="control-label" for="basicinput">Status</label>
								<div class="controls">
								<label class="radio inline">
									<input type="radio" name="status" id="optionsRadios1" value="aktif" required>
									aktif
								</label>
								<label class="radio inline">
									<input type="radio" name="status" id="optionsRadios1" value="tidak aktif" required>
									tidak aktif
								</label>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<buttn onclick="return confirm('Apakah Anda Yakin?')"><button type="submit" class="btn btn-primary">Simpan</button></buttn>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
</div>