<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Smarty Admin</title>
		<meta name="description" content="">
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]">

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css">

		<!-- CORE CSS -->
		<link href="<?php echo  asset_url();?>plugins\bootstrap\css\bootstrap.min.css" rel="stylesheet" type="text/css">
		
		<!-- THEME CSS -->
		<link href="<?php echo  asset_url();?>css\essentials.css" rel="stylesheet" type="text/css">
		<link href="<?php echo  asset_url();?>css\layout.css" rel="stylesheet" type="text/css">
		<link href="<?php echo  asset_url();?>css\color_scheme\green.css" rel="stylesheet" type="text/css" id="color_scheme">

	</head>
	<!--
		.boxed = boxed version
	-->
	<body>
	<?php
	$logout=$this->input->get('logout');
	if($logout){
		echo "<div style='color:green;border:1px solid;border-color: #009900;'>".'you are successfully logged out'."</div>";
	}else{
		getInformUser();
	}
	?>

		<div class="padding-15">

			<div class="login-box">

				<!--
				<div class="alert alert-danger">Complete all fields!</div>
				-->










				<!-- registration form -->
				<form action="<?php echo 'products';?>" method="post" class="sky-form boxed" novalidate="novalidate">
					 <header> <a href="<?php echo base_url().'products/showProducts' ?>">Show Products</a> </header>
					<header>Seller Add Product </header>
					<fieldset>					
						<label class="input">
							<input type="text" placeholder="Products Name" name="products_name">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>

						<label class="input">

							<input type="text" placeholder="Products Brand Name" name="products_brand_name">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder="Manufacturer" name="products_manufacturer">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>


						<label class="input">

							<input type="text" placeholder="Substance" name="products_substance">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder="Products Size" name="products_size">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder="Thickness" name="products_thickness">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder=" Grain" name="products_grain">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>



						<label class="input">

							<input type="text" placeholder="Sheets per Packet" name="products_sheets_per_packet">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder="Products Per Bundle" name="packets_per_bundle">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>


						<label class="input">

							<input type="text" placeholder="Quantity on Offer (in pkts)" name="products_quantity_on_offer">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>






						<label class="input">

							<input type="text" placeholder="Products Packing" name="products_packing">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder="Products Rate" name="products_rate">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>


						<label class="input">

							<input type="text" placeholder="Products CENVAT Amount" name="products_cenvat_amount">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</fieldset>
						

					<?php echo form_hidden('todo', 'register'); ?>
					<footer>

						<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i>Add Products</button>

					</footer>

				</form>


			</div>

		</div>


		<!-- MODAL -->
		<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModal">Terms &amp; Conditions</h4>
					</div>



					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary" id="terms-agree"><i class="fa fa-check"></i> I Agree</button>
						
						<button type="button" class="btn btn-danger pull-left"><i class="fa fa-print"></i> Print</button>
					</div>

				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		<!-- /MODAL -->

	
		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets\plugins\jquery\jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="assets\js\app.js"></script>

		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript">

			/**
				Checkbox on "I agree" modal Clicked!
			**/
			jQuery("#terms-agree").click(function(){
				jQuery('#termsModal').modal('toggle');

				// Check Terms and Conditions checkbox if not already checked!
				if(!jQuery("#checked-agree").checked) {
					jQuery("input.checked-agree").prop('checked', true);
				}
				
			});
		</script>

	</body>
</html>