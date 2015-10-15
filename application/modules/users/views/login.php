
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

				<!-- login form -->
				<form action="<?php echo 'users';?>" method="post" class="sky-form boxed">
					<header><i class="fa fa-users"></i> Sign In</header>

					<!--
					<div class="alert alert-danger noborder text-center weight-400 nomargin noradius">
						Invalid Email or Password!
					</div>

					<div class="alert alert-warning noborder text-center weight-400 nomargin noradius">
						Account Inactive!
					</div>

					<div class="alert alert-default noborder text-center weight-400 nomargin noradius">
						<strong>Too many failures!</strong> <br />
						Please wait: <span class="inlineCountdown" data-seconds="180"></span>
					</div>
					-->

					<fieldset>	
					
						<section>
							<label class="label">E-mail</label>
							<label class="input">
								<i class="icon-append fa fa-envelope"></i>
								<input type="email" name="user_name_email">
								<span class="tooltip tooltip-top-right">Email Address</span>
							</label>
						</section>
						
						<section>
							<label class="label">Password</label>
							<label class="input">
								<i class="icon-append fa fa-lock"></i>
								<input type="password" name="password">
								<b class="tooltip tooltip-top-right">Type your Password</b>
								<?php echo form_hidden('todo', 'login'); ?>
							</label>
							<label class="checkbox"><input type="checkbox" name="checkbox-inline" checked=""><i></i>Keep me logged in</label>
						</section>

					</fieldset>

					<footer>
						<button type="submit" class="btn btn-primary pull-right">Sign In</button>
						<div class="forgot-password pull-left">
							<a href="page-password.html">Forgot password?</a> <br>
							<a  href="<?php echo base_url().'users/register';?>"><b>Need to Register?</b></a>
							<a  href="<?php echo base_url().'sellers';?>"><b>Need to Sellers Register?</b></a>
						</div>
					</footer>
				</form>
				<!-- /login form -->

				<hr>

				<!--<div class="text-center">
					Or sign in using:
				</div>
-->
<!--
				<div class="socials margin-top-10 text-center"><!-- more buttons: ui-buttons.html --
					<a href="#" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
					<a href="#" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
				</div>
-->
			</div>

		</div>

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets\plugins\jquery\jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="assets\js\app.js"></script>
	</body>
</html>