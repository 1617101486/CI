<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head"><h3><?php echo $judul;?></h3></div>
			<div class="module-body">
				<section class="docs">
					<form class="form-horizontal row-fluid" action="<?php echo('input')?>" method="post">
						<div class="control-group">
							<label class="control-label" for="basicinput"></label>
							<div class="controls">
								<input type="hidden" id="basicinput" name="id_siswa" placeholder="NIS Siswa" class="span8" required >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">Nama lengakap</label>
							<div class="controls">
								<input type="text" id="basicinput" name="nama_siswa" placeholder="Nama Siswa" class="span8" required >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">Tempat Tanggal Lahir</label>
							<div class="controls">
								<div class="span5">
									<input type="text" id="basicinput" name="tempat_lahir" placeholder="Tempat" class="span12" required >
									<p><code>*Contoh : Cianjur</code></p>
								</div>

								<div class="span3">
									<input type="date" id="basicinput" name="ttl" placeholder=" tanggal lahir" class="span12" required >
									<p><code>*Contoh : 01-12-2000</code></p>
								</div>
							</div>
						</div>
						<div class="control-group">
						    <label class="control-label" for="basicinput">Alamat</label>
						    <div class="controls">
							    <textarea clas id="span8" rows="5" name="alamat" required=""></textarea>
						    </div>
					    </div>
					    <div class="control-group">
							<label class="control-label" for="basicinput">ID KELAS</label>
							<div class="controls">
								<input type="text" id="basicinput" name="id_kelas" placeholder="id kelas" class="span8" required >
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