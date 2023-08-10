<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>user Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/bottstrap vs jq/bootstrap/css/
	bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="C:/wamp64/www/summer war pro/bottstrap vs jq/fontawesome-free-5.12.1-web/css/all.css">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="login-box">
	<div class="row">

		<div class="col-md-6 login-left">
		<h2>Login Here</h2>
		<form action="validation.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>


			</div>

		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" required>
			
		</div>

	<button type="submit" class="btn btn-primary">Login</button>
			
		</form> 

		</div>



<div class="col-md-6 login-right">
		<h2>Registration Here</h2>
		<form action="registration.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>


			</div>

		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" required>
			
		</div>
		<div class="form-group">
			<label>Age</label>
			<input type="text" name="age" class="form-control" required>
			
		</div>

		<div class="form-group">
			<label>Department</label>
			<input type="text" name="department" class="form-control" required>
			
		</div>
		<div class="form-group">
			<label>Address</label>
			<input type="text" name="address" class="form-control" required>
			
		</div>

	<button type="submit" class="btn btn-primary">Register</button>
			
		</form> 

		</div>



	</div>
	</div>
	
</div>




<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>