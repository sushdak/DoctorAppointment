<?php include ('../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="id=edge">

	<title>Patient</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header1">
		<h2>Register</h2>
	</div>

<form method="post" action="patient_signup.php" enctype="multipart/form-data">

	<?php include ('../datalayer/errors.php'); ?>

	<div class="input-group">
		<label>User ID</label>
		<input type="text" name="UserID" >
	</div>


	<div class="input-group">
		<label>Name</label>
		<input type="text" name="Name" >
	</div>

	<div class="input-group">
		<label>Address</label>
		<input type="text" name="Address">
	</div>

	<div class="input-group">
		<label>Contact Number</label>
		<input type="text" name="ContactNumber">
	</div>

	<div class="input-group">
		<label>Email address</label>
		<input type="text" name="Email">
	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="text" name="password">
	</div>

	<div class="input-group">
		<label>Blood type</label>
		<input type="text" name="bloodtype">
	</div>


	<div class="input-group">
		<button type="submit" name="Register" class="btn">Register</button>
	</div>

	<p>
		Already a member? <a href="patient_login.php" class="btn">Sign in </a>
	</p>

</form>

<br><br><br><br><br><br>

	<footer>
		<div>
			&copy Created by Sushanth M Dak
		</div>
	</footer>

</body>
</html>
