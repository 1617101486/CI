<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head"><h3><?php echo $judul;?></h3></div>
			<div class="module-body">
				<section class="docs">
					<form class="from-horizontal row-fluid" action="<?php echo('input')?>" method="post">
						<div class="control-group">
							<div class="control-group">
							<label class="control-label" for="basicinput">ID GRUP</label>
							<div class="controls">
								<input type="text" id="basicinput" name="id_grup" placeholder="NIS Siswa" class="span8" required >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">ID USTADZ</label>
							<div class="controls">
								<input type="text" id="basicinput" name="id_ustadz" placeholder="NIS Siswa" class="span8" required >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">ID SISWA</label>
							<div class="controls">
								<input type="text" id="basicinput" name="id_siswa" placeholder="NIS Siswa" class="span8" required >
							</div>
						</div>
							<label class="control-label" for="basicinput">NAMA GRUP</label>
							<div class="controls">
								<input type="text" id="basicinput" name="nama_grup" class="span8" placeholder="NAMA GRUP" class="span8" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">TANGGAL</label>
							<div class="controls">
								<input type="date" id="basicinput" name="tanggal" placeholder=" tanggal " class="span3" required >
								<p><code>*Contoh :  01-12-2000</code></p>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">KETERANGAN</label>
							<div class="controls">
								<input type="text" id="basicinput" name="keterangan" class="span8" placeholder="KETERANGAN" class="span8" required>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<buttn onclick="return confirm('Apakah Anda Yakin?')"><button type="submit"  class="btn btn-primary">Simpan</button></buttn>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
</div><a href=""></a>