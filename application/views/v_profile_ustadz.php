<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head"><h3><?php echo $judul;?></h3></div>
			<div class="module-body">
				<section class="docs">
					<form class="form-horizontal row-fluid" action="<?php echo base_url('ustadz/insertpilihanustadz?id='.$id)?>" method="post">
						<!-- <div class="control-group">
							<div class="controls">
								<input  type="hidden" name="id"  value="<?php echo $id_ustadz; ?>" readonly>
							</div>
						</div> -->
						<div class="control-group">
							<label class="control-label" for="basicinput">Nama Ustadz</label>
							<div class="controls">
								<input type="text" id="basicinput" name="nama" placeholder="Nama Ustadz" class="span8" required value="<?php echo 
								$ustadz[0]['nama_ustadz']; ?>" readonly>
							</div>
						</div>
						<div class="control-group"> 
						     <label class="control-label" for="basicinput">Alamat</label>
						      <div class="controls">
							     <textarea class="span8" id="span8" rows="5" name="alamat" required value="<?php echo $ustadz[0]['alamat']; ?>" readonly></textarea>
						     </div>
					    </div>
					    <div class="control-group">
							<label class="control-label" for="basicinput">Tempat Tanggal Lahir</label>
							<div class="controls">
								<input readonly type="text" id="basicinput" name="ttl" placeholder="Tempat tanggal lahir" value="<?php echo $ustadz[0]['ttl'] ?>" class="span5" required >
								
							</div>
						</div>
						<br>
							<div class="controls">
								<button name="simpan" type="submit" class="btn btn-success" >pilih</button>
								<a href="<?php echo base_url('ustadz'); ?>"  type="button" class="btn btn-danger">cancel</a>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
</div>