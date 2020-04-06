<?php include_once 'header.php'; ?>
<div class="container">
	<div class="row d-flex justify-content-center mt-5">
		<div class="col-10">
			<div class="card">
			  <div class="card-body">
				  <div class="form-group row">
					<label for="log_username" class="col-sm-2 col-form-label font_cat_med text-right">Username:</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control is-required" id="log_username">
					</div>
				  </div>
				  <div class="form-group row">
					<label for="log_password" class="col-sm-2 col-form-label font_cat_med text-right">Password:</label>
					<div class="col-sm-10">
					  <input type="password" class="form-control is-required" id="log_password">
					</div>
				  </div>
				  <div class="text-center"><button type="button" name="login" class="btn btn-secondary login">Login</button></div>
					<div class="alert text-center d-none mt-5" role="alert">

					</div>
			  </div>
			</div>
		</div>
	</div>
</div>
<?php include_once 'footer.php'; ?>
