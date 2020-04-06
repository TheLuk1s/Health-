<?php include_once 'header.php'; ?>
<div class="container">
	<div class="row d-flex justify-content-center mt-5">
		<div class="col-10">
			<div class="card">
			  <div class="card-body">
				  <div class="form-group row">
					<label for="reg_email" class="col-sm-2 col-form-label font_cat_med text-right">Email:</label>
					<div class="col-sm-10">
					  <input type="email" class="form-control is-required" id="reg_email">
					</div>
				  </div>
				  <div class="form-group row">
					<label for="reg_username" class="col-sm-2 col-form-label font_cat_med text-right">Username:</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control is-required" id="reg_username">
					</div>
				  </div>
				  <div class="form-group row">
					<label for="reg_name" class="col-sm-2 col-form-label font_cat_med text-right">Name:</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control is-required" id="reg_name">
					</div>
				  </div>
				  <div class="form-group row">
					<label for="reg_surname" class="col-sm-2 col-form-label font_cat_med text-right">Surname:</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control is-required" id="reg_surname">
					</div>
				  </div>
				  <div class="form-group row">
					<label for="reg_password" class="col-sm-2 col-form-label font_cat_med text-right">Password:</label>
					<div class="col-sm-10">
					  <input type="password" class="form-control is-required" id="reg_password">
					</div>
				  </div>
				  <div class="form-group row">
					<label for="reg_password_repeat" class="col-sm-2 col-form-label font_cat_med text-right">Repeat password:</label>
					<div class="col-sm-10">
					  <input type="password" class="form-control is-required" id="reg_password_repeat">
					</div>
				  </div>
				  <div class="text-center"><button type="button" class="btn btn-secondary register">Register</button></div>
				  <div class="alert text-center d-none mt-5" role="alert">
						
				  </div>
			  </div>
			</div>
		</div>
	</div>
</div>
<?php include_once 'footer.php';?>
