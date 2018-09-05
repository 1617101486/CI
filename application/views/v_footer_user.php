				</div>	
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<b class="copyright">&copy; 2018 PRAKERIN <a href="">Versi 1.0</a>  - PT Swamedia Informatika </b> All Powered by <a href="https://plus.google.com/u/0/117183913471757770120" target="blank">BAR-BAR-CYBER</a>
			</div>
		</div>
		<script src="<?php echo base_url(); ?>assets/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/scripts/jquery.flot.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/scripts/jquery.flot.resize.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/datatables/jquery.dataTables.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/scripts/jquery.flot.js" type="text/javascript"></script>
		<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTable_paginate').addClass("btn-group datatable-pagination");
			$('.dataTable_paginate > a').warpInner('<span />');
			$('.dataTable_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTable_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
		</script>
	</body>
</html>
