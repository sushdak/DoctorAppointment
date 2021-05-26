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
	<h2>Book Appointment</h2>
</div>

<form method="post" action="book.php">

<?php include ('../../datalayer/errors.php');?>





	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">


			<div class="input-group">
		<label>Category</label>
			<select name="categorey" class="xd">
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





	<div class="input-group">
		<button type="submit" name="Search" class="btn">Search</button>
	</div>











	<?php

	  if (isset($_POST['Search'])) {

	$categorey = mysqli_real_escape_string($mysqli,$_POST['categorey']);

	$query2="SELECT * FROM doctor WHERE categorey=('$categorey')";
	$result2=mysqli_query($mysqli,$query2);
	?>

		<div class="input-group">

			<label>Doctor ID</label>


		<select class="input-group2" name="docID">

	<?php   while ($row2=mysqli_fetch_assoc($result2)) {
		?>


		<option> <?php echo $row2['DoctorID'] ?> </option>



	   <?php

	} ?>
	 </select>
	 </div>


	<div class="input-group">
		<label>Appointment ID</label>
		<input type="text" name="AppoID" >

	</div>




	<div class="input-group">
		<label>Date</label>
		<input type="Date" name="Date">

	</div>

	<div class="input-group">
		<label>Time</label>
		<input type="Time" name="Time">
	</div>

	 <div class="input-group">
			<button type="submit" name="Book" class="btn">BOOK</button>
			</div>

	 <?php
}


	    ?>








</form>


	<footer>
		<div>
			&copy Created by Sushanth M Dak
		</div>
	</footer>



</body>

</html>
