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
	<h2>Search Doctor</h2>
</div>


<form method="post" action="searchdoctor.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold;">Search By:<br>*Doctor ID<br>*Doctor Name<br>*Categorey</label>
		<input type="text" name="dID" >

	</div>

	<div class="input-group">
		<button type="submit" name="Search" class="btn">Search</button>
	</div>









		</form>
	</form>




		<?php

         if (isset($_POST['Search'])) {

         ?>	<table class="table2">
		<tr>
		<th>Doctor ID</th>
		<th>Doctor Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>

		</tr> <?php


		$dID =$mysqli -> real_escape_string($_POST['dID']);

		$sql6="SELECT  * FROM  doctor   WHERE 	Doctorname=('$dID') OR DoctorID=('$dID') OR categorey=('$dID')" ;
		$result6=$mysqli->query($sql6);
		if(mysqli_num_rows($result6)==1){
			while ($row6=$result6->fetch_assoc()) {

				echo "<tr><td>".$row6["DoctorID"]."</td><td>".$row6["Doctorname"]."</td><td>".$row6["Address"]."</td><td>".$row6["ContactNumber"]."</td><td>".$row6['categorey']."</td></tr>";
			}


			echo "</table";



		}
	}?>
 </table>


	<footer>
		<div>
			&copy Created by Sushanth M Dak
		</div>
	</footer>




</body>
</html>


