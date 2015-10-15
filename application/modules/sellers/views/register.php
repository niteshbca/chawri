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
				<form action="<?php echo 'sellers';?>" method="post" class="sky-form boxed" novalidate="novalidate">
					<header><i class="fa fa-users"></i> Create Seller Account </header>
					
					<fieldset>					
						<label class="input">
							<i class="icon-append fa fa-envelope"></i>
							<input type="text" placeholder="Email address" name="user_name_email">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>

						<label class="input">
							<i class="icon-append fa fa-lock"></i>
							<input type="password" placeholder="Password" name="password">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					
						<label class="input">
							<i class="icon-append fa fa-lock"></i>
							<input type="password" placeholder="Confirm password" name="confirm_password">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder="Company Name" name="company_name">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
						<label class="input">

							<input type="text" placeholder="Address" name="address">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
						<label class="input">

							<input type="text" placeholder="Tin No" name="tin_no">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
						<label class="input">

							<input type="text" placeholder="Pan No" name="pan_no">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
						<label class="input">

							<input type="text" placeholder="phone" name="phone">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder=" Excise Registration Number" name="excise_no">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
						<label class="input">

							<input type="text" placeholder="Services Tax No" name="services_tax_no">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
						<label class="input">

							<input type="text" placeholder="Tan No" name="tan_no">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>


					</fieldset>
						

					<?php echo form_hidden('todo', 'register'); ?>
					<footer>
						<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i> Create Account</button>
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