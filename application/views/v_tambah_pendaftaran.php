<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head"><h3></h3></div>
			<div class="module-body">
				<section class="docs">
					<form class="form-horizontal row-fluid" action="<?php echo('input')?>" method="post">
					 <head>  
						   <title>Registration</title>  
						   <meta charset="utf-8">  
						   <meta http-equiv="X-UA-Compatible" content="IE=edge">  
						    <meta name="viewport" content="width=device-width, initial-scale=1">  
						   <!-- Latest compiled and minified CSS -->  
						   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
						   <style type="text/css">  
						    .form-box{  
						     max-width: 500px;  
						     position: relative;  
						     margin: 5% auto;  
						    }  
						   </style>  
					 </head> 
					 <body>
					 	<div class="control-group">
							<label class="control-label" for="basicinput"></label>
							<div class="controls">
								<input type="hidden" id="basicinput" name="id_account" placeholder="NIS" class="span8" required >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">Nama Lengkap</label>
							<div class="controls">
								<input type="text" id="basicinput" name="nama_lengkap" placeholder="Nama Siswa" class="span8" required >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">Tempat Tanggal Lahir</label>
							<div class="controls">
								<input type="text" id="basicinput" name="tempat" placeholder="Tempat " class="span5" required >
								<p><code>*Contoh : Cianjur</code></p>
								<input type="date" id="basicinput" name="tanggal" placeholder="Tempat tanggal lahir" class="span3" required >
								<p><code>*Contoh :  01-12-2000</code></p>
							</div>
						</div>
						<div class="control-group">
						    <label class="control-label" for="basicinput">Alamat</label>
						    <div class="controls">
							    <textarea clas id="span8" rows="5" name="alamat" required=""></textarea>
						    </div>
					    </div>
					    <div class="control-group">
							<label class="control-label" for="basicinput">Email</label>
							<div class="controls">
								<input type="text" id="basicinput" name="username" placeholder="Email" class="span8" required >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="basicinput">Password</label>
							<div class="controls">
								<input type="password" id="basicinput" name="password" placeholder="password" class="span8" required >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Jenis Kelamin</label>
							<div class="controls">
								<label class="radio inline">
									<input type="radio" name="jk" id="optionsRadios1" value="L" required>
									Laki-laki
								</label>
								<label class="radio inline">
									<input type="radio" name="jk" id="optionsRadios1" value="P" required>
									Perempuan
								</label>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">kedudukam</label>
								<div class="col-md-4">
                     		  		 <select class="form-control " id="identitasdiri" required="" name="kedudukan">
				                           <option value="">- Pilihan -</option>
				                           <option value="2">USTADZ</option>
				                           <option value="3">SISWA</option>
                       				 </select>  
                    		    </div>
					 		</div>					   
						<div class="control-group">
							<div class="controls">
								<buttn onclick="return confirm('Apakah Anda Yakin?')"><button type="submit" class="btn btn-primary">Daftar</button></buttn>
								 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
								 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
								</body>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
</div>