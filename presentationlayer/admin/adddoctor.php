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
		<h2>Add Doctor</h2>
	</div>


	<form method="post" action="adddoctor.php" autocomplete="off" style=" margin: 50px auto 0px;margin-top: 0px;">
		<?php include ('../../datalayer/errors.php'); ?>
		<div class="input-groupA">
			<label>Doctor ID</label>
			<input type="text" name="addID" >
		</div>

		<div class="input-groupA">
			<label>Doctor Name</label>
			<input type="text" name="addname" >
		</div>

		<div class="input-groupA">
			<label>Address</label>
			<input type="text" name="addAddress">
		</div>

		<div class="input-groupA">
			<label>Contact Number</label>
			<input type="text" name="addContactNumber">
		</div>


		<div class="input-groupA">
			<label>Email address</label>
			<input type="text" name="addEmail">
		</div>

		<div class="input-groupA">
			<label>Password</label>
			<input type="text" name="addpassword">
		</div>
		<div class="input-groupA">
			<label>Category</label>
			<select name="addcategory" class="xd">
				<option value="nav" ><--></option>
		   		<option value="Physician" >Physician</option>
		   		<option value="ENT">ENT</option>
		   		<option value="Dentist">Dentist</option>
		   		<option value="Cardiologist">Cardiologist</option>
		   		<option value="Pediatrician">Pediatrician</option>
		   		<option value="Neurologist">Neurologist</option>
		   		<option value="Gynecologists">Gynecologists</option>
		   		<option value="Psychiatrist">Psychiatrist</option>

	   		</select>
	   	</div>

		<div class="input-groupA">
			<button type="submit" name="Add" class="btnA">Add Doctor</button>
		</div>
	</form>

<br><br><br><br>
	<footer>
		<div>
			&copy Created by Sushanth M Dak
		</div>
	</footer>

</body>
</html>
