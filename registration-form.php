<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <title>Registration</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css"><link rel="stylesheet" href="public/style.css">

</head>
<body>
<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto" style="height:500px">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-1">Sign Up</h4>
                                            <form action="register.php" method="POST">
											<div class="form-group">
												<input type="text" name="username" class="form-style" placeholder="Your Username" id="username" autocomplete="off" required>
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="email" name="email" class="form-style" placeholder="Your Email" id="email" autocomplete="off" required>
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" id="password" autocomplete="off" required>
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
                                            <div class="form-group mt-2">
												<input type="password" name="confirm_password" class="form-style" placeholder="Confirm Your Password" id="confirm_password" autocomplete="off" required>
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
                                            	<button type="submit" class="btn mt-4">submit</button>
                                                <p class="mb-0 mt-4 text-center">Already have an account? <br><a href="login-form.php" class="link">Login</a></p>
				      					</div>
                                        </form>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</body>
</html>