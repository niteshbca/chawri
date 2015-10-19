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
<?php print_r($data) ;?>
             
				<form action="<?php echo base_url().'products/update/'.$data[0]['chawri_products_id'] ?>" method="post" class="sky-form boxed" novalidate="novalidate">
					 <header> <a href="<?php echo base_url().'products/showProducts' ?>">Show Products</a> </header>
					<header>Seller Add Product </header>
					<fieldset>					
						<label class="input" > Products Name
							<input type="text"  name="products_name"  value="<?php echo $data[0]['chawri_products_name']; ?>">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>

						<label class="input"> Products Brand Name

							<input type="text"  name="products_brand_name" value="<?php echo $data[0]['chawri_products_brand_name']; ?>">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input"> Manufactures 

							<input type="text"  name="products_manufacturer" value="<?php echo $data[0]['chawri_products_manufacturer']; ?>">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>


						<label class="input"> Substance

							<input type="text"  name="products_substance" value="<?php echo $data[0]['chawri_products_substance']; ?>">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
                        
                        <label class="input">Bulk

							<input type="text" name="products_thickness" value="<?php echo $data[0]['chawri_products_thickness']; ?>">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">  Products Size

							<input type="text" name="products_size" value="<?php echo $data[0]['chawri_products_size']; ?>">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						
						<label class="input"> Grain

							<input type="text" name="products_grain" value="<?php echo $data[0]['chawri_products_grain']; ?>">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>



						<label class="input"> Sheets per Packet

							<input type="text" name="products_sheets_per_packet" value="<?php echo $data[0]['chawri_products_sheets_per_packet']; ?>">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input"> Products Per Bundle 

							<input type="text"  name="packets_per_bundle" value="<?php echo $data[0]['chawri_products_packets_per_bundle']; ?>">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

                     <label class="input">  Pkt. Weight

							<input type="text"  name="products_weight" value="<?php echo $data[0]['chawri_products_weight']; ?>">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>


						<label class="input"> Quantity on Offer (in pkts)

							<input type="text"  name="products_quantity_on_offer" value="<?php echo $data[0]['chawri_products_quantity_on_offer']; ?>">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
          				<label class="input"> Products Packing

							<input type="text" name="products_packing" value="<?php echo $data[0]['chawri_products_packing']; ?>">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input"> Products Rate

							<input type="text"  name="products_rate" value="<?php echo $data[0]['chawri_products_rate']; ?>">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>


						<label class="input"> Products CENVAT Amount

							<input type="text" name="products_cenvat_amount" value="<?php echo $data[0]['chawri_products_cenvat_amount']; ?>">
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


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
	<script type="text/javascript">

		$( document ).ready(function() {

			var rowNum = 0;

			$(".addmore").click(function() {

				rowNum++;
				var row = $("<div id='address-" + rowNum + "' class='address' />");
				var street = $("<div class='street'><input type='text' name='street[]'></div>");
				var city = $("<div class='city'><input type='text' name='city[]'></div>");
				var rm = $("<button type='button' class='addmore'>Add More Address</button>");
				$("body").append(row);
				street.appendTo(row);
				city.appendTo(row);
				rm.appendTo(row);


			});

		});
	</script>
	</body>
</html>