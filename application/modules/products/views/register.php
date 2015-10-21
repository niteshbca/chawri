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


				<form action="<?php echo base_url().'products/singleProducts';?>" method="post" class="sky-form boxed" novalidate="novalidate" name"formproducts">
					 <!-- <header> <a href="<?php echo base_url().'products/showProducts' ?>">Show Products</a> </header> -->
					<header>Seller Add Product </header>
					<fieldset>					
						<label class="input" >
							<input type="text" placeholder="Products Name" name="products_name" required>
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>

						<label class="input">

							<input type="text" placeholder="Products Brand Name" required name="products_brand_name">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder="Manufacturer" required name="products_manufacturer">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
                              
						<label class="input">

							<input type="text" placeholder="Substance" required name="products_substance">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="">

							<input type="radio" name="sheet"  id="chkNo" checked   onclick="ShowHideDiv()" > Reel
							<input type="radio" name="sheet" id="chkYes" onclick="ShowHideDiv()" > Sheet
							
						</label>
                        

						

						<label class="input">

							<input type="text" placeholder="Bulk " required name="products_thickness">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

                       <label class="input">

							<input type="text" placeholder="Products Size" required name="products_size">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder=" Grain" required name="products_grain">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>


                      <div id="dvPassport" style="display: none">
						<label class="input">

							<input type="text" placeholder="Sheets per Packet" name="products_sheets_per_packet">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
             
						<label class="input">

							<input type="text" placeholder="Products Per Bundle" name="packets_per_bundle">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder="Pkt. Weight " name="packets_weight">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

                         
                       </div>



						<label class="input">

							<input type="text" placeholder="Quantity on Offer (in pkts)" required name="products_quantity_on_offer">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
          				<label class="input">

							<input type="text" placeholder="Products Packing" required name="products_packing">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder="Products Rate" required name="products_rate">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>


						<label class="input">

							<input type="text" placeholder="Products CENVAT Amount" required name="products_cenvat_amount">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</fieldset>
						

					<?php echo form_hidden('todo', 'register'); ?>
					<footer>
                          <button type="button" class="addmore"><a href="<?php echo base_url().'products/productsReel' ?>">Add More</a></button> 
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


	
	

<script type="text/javascript">
    function ShowHideDiv(obj) {
    	// alert(123);
        var chkYes = document.getElementById("chkYes");
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = chkYes.checked ? "block" : "none";
    }
</script>
	</body>
</html>