<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head"><h3><?php echo $judul;?></h3></div>
			<div class="module-body">
				<section class="docs">
					<form class="form-horizontal row-fluid" action="<?php echo('../edit_simpan'); ?>" method="post">
						<div class="control-group">
							<label class="control-label" for="basicinput">id</label>
							<div class="controls">
								<input type="text" id="basicinput" name="id_grup" value="<?php echo $g['id_grup'];?>" class="span8" disabled >
								<?php echo form_hidden('id_grup',$this->uri->segment(3));?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">nama_grup</label>
							<div class="controls">
								<input type="text" id="basicinput" name="nama_grup" value="<?php echo $g['nama_grup']; ?>" required class="span8" >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">tanggal</label>
							<div class="controls">
								<input type="text" id="basicinput" name="tanggal" value="<?php echo $g['tanggal']; ?>" required class="span8" >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">keteranggan</label>
							<div class="controls">
								<textarea type="text" id="basicinput" name="keterangan" value="<?php echo $g['keterangan']; ?>" required class="span8" ></textarea>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">surat</label>
							<div class="controls">
								<input type="text" id="basicinput" name="surat" value="<?php echo $g['surat']; ?>" required class="span8" >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">ayat</label>
							<div class="controls">
								<input type="text" id="basicinput" name="ayat" value="<?php echo $g['ayat']; ?>" required class="span8" >
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