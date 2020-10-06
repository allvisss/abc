<div class="row">
	<div class="col-lg-4 offset-lg-4">
		<div class="card mt-5">
			<div class="card-header bg-primary text-white text-center">
				<span class="login100-form-title p-b-26">
					<h3>Dashboard</h3>
				</span>
			</div>
			<div class="card-body">
				<form method="POST" class="login100-form validate-form" action="/index.php/login/login">
					<div class="wrap-input100">
						<div class="mt-2 mb-2 position-relative form-group"><input name="username" type="text" class="form-control" placeholder="Username"></div>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<div class="mt-2 mb-2 position-relative form-group"><input name="pass" type="password" class="form-control" placeholder="Password"></div>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<button class="mb-2 btn-block btn-transition btn btn-outline-primary">
								Login
							</button>
						</div>
						<?php if (isset($message)) {
							echo "<p>$message</p>";
						} ?>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="<?php echo base_url() ?>application/controllers/signup/index">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>