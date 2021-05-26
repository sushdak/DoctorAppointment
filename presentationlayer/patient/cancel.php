<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="id=edge">

	<title>Patient</title>
	<link rel="stylesheet"  href="patientstyle.css">
</head>

<header>
	<nav>
		<ul>
			<li><a href="patientinfo.php" class="btn">MyInfo</a></li>
			<li><a href=" book.php" class="btn">Book Appointment</a></li>
			<li><a href=" viewappointment.php" class="btn">View Appointment</a></li>
			<li><a href="cancel.php" class="btn">Cancel Booking</a></li>
			<li><a href=" searchdoctor.php" class="btn">Search Doctor</a></li>
			<li><a href="../../applicationlayer/index.php" class="btn">Logout</a></li>
		</ul>
	</nav>
</header>

<body>

	<div class="header">
	<h2>Cancel Appointment</h2>
</div>

<form method="post" action="cancel.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label>Appointment ID</label>
		<input type="text" name="AppoID2">

	</div>

	<div class="input-group">
		<button type="submit" name="cancel" class="btn">Cancel</button>
	</div>

		</form>
	</form>


		<footer>
		<div>
			&copy Created by Sushanth M Dak
		</div>
	</footer>



</body>
</html>


