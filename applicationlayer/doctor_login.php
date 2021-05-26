<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="id=edge">

	<title>Doctor</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header1">
		<h2>Doctor Login</h2>
	</div>

<form method="post" action="doctor_login.php">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-group">
		<label>Doctor ID</label>
		<input type="text" name="doctorID">
	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="Password" name="doctorpassword">
	</div>

	<div class="input-group">
		<button type="submit" name="Login2" class="btn"> Login</button>
	</div>

</form>

	<footer>
		<div>
			&copy Created by Sushanth M Dak
		</div>
	</footer>

</body>
</html>
