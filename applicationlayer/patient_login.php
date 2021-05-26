<?php include ('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="id=edge">

	<title>Patient Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header1">
		<h2>Patient Login</h2>
	</div>

<form method="post" action="patient_login.php">

	<?php include ('../datalayer/errors.php') ?>

	<div class="input-group">
		<label>User ID</label>
		<input type="text" name="UserID">
	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="Password" name="password">
	</div>

	<div class="input-group">
		<button type="submit" name="Login" class="btn"> Login</button>
	</div>

	<p>
		Not a member? <a href="patient_signup.php" class="btn">Sign Up </a>
	</p>

</form>

	<footer>
		<div>
			&copy Created by Sushanth M Dak
		</div>
	</footer>

</body>
</html>
