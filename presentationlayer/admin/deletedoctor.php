<?php include ('../../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="id=edge">

	<title>Admin</title>
	<link rel="stylesheet"  href="adminstyle.css" type="text/css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<nav>
		<ul>
			<li><a href="adddoctor.php" class="btnA">Add Doctor</a></li>
			<li><a href="deletedoctor.php" class="btnA">Delete Doctor</a></li>
			<li><a href="viewdoctor.php" class="btnA">View Doctors</a></li>
			<li><a href=" viewpatients.php"class="btnA">View Patients</a></li>
			<li><a href="viewappointments.php"class="btnA">View Appointments</a></li>
  			<li><a href="../../applicationlayer/index.php"class="btnA">Logout</a></li>
		</ul>
	</nav>
</header>

<body>
	<div class="headerA">
		<h2>Delete Doctor</h2>
	</div>

	<form method="post" action="deletedoctor.php" class="delete" autocomplete="off" style=" margin: 50px auto 0px;margin-top: 0px;">
		<div class="input-groupA">
			<label>Doctor ID</label>
			<input type="text" name="deleteID" >
		</div>

		<div class="input-groupA">
			<button type="submit" name="Delete" class="btnA">Delete</button>
		</div>
	</form>

	<footer>
		<div>
			&copy Created by Sushanth M Dak
		</div>
	</footer>

</body>
</html>
