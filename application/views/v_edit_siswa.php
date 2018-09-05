<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head"><h3><?php echo $judul;?></h3></div>
			<div class="module-body">
				<section class="docs">
					<form class="form-horizontal row-fluid" action="<?php echo('../edit_simpan')?>" method="post">
						<div class="control-group">
							<label class="control-label" for="basicinput">ID SISWA</label>
							<div class="controls">
								<input type="text" id="basicinput" name="id_siswa" placeholder="ID SISWA" class="span8" required value="<?php echo $siswa['id_siswa']; ?>">
								<?php echo form_hidden('id_siswa',$this->uri->segment(3));?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">Nama Lengkap</label>
							<div class="controls">
								<input type="text" id="basicinput" name="nama_siswa" placeholder="Nama Siswa" class="span8" required value="<?php echo $siswa['nama_siswa']; ?>">
							</div>
						</div>
						<div class="control-group">
						     <label class="control-label" for="basicinput">Alamat</label>
						      <div class="controls">
							     <textarea clas id="span8" rows="5" name="alamat" required=" "><?php echo $siswa['alamat'] ?></textarea>
						     </div>
					    
							
						<div class="control-group">
							<label class="control-label" for="basicinput">Tempat Tanggal Lahir</label>
							<div class="controls">
								<input type="text" id="basicinput" name="ttl" placeholder="Tempat tanggal lahir" value="<?php echo $siswa['ttl'] ?>" class="span5" required >
								<p><code>*Contoh : Cianjur, 01-12-2000</code></p>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">ID KELAS</label>
							<div class="controls">
							<input type="text" id="basicinput" name="id_kelas" placeholder="status siswa" class="span8" required value="<?php echo $siswa['id_kelas']; ?>">
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