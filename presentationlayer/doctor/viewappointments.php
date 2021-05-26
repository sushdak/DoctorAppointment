<?php include '../../datalayer/bookserver.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="id=edge">

	<title>Doctor</title>
	<link rel="stylesheet"  href="doctorstyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<nav>
		<ul>
			<li><a href="viewdoctor.php" class="btnA">MyInfo</a></li>
			<li><a href="viewappointments.php" class="btnA">Appointments</a></li>
			<li><a href="../../applicationlayer/index.php" class="btnA">Logout</a></li>
		</ul>
	</nav>
</header>

<body>
	<h1 style="margin-left: 40%;">My Appointments</h1>

	<table class="table2">
		<tr>
			<th>Appointment-ID</th>
			<th>DATE</th>
			<th>TIME</th>
			<th>PatientID</th>
			<th>PatientName</th>
			<th>PatientEmail</th>
			<th>PatientContactNumber</th>
		</tr>
		<?php
			$sqldoc="SELECT * FROM bookapp ,patients WHERE docID=('$doctorprofile') AND  patientID=UserID";
			$resultdoc=$mysqli->query($sqldoc);
			if(mysqli_num_rows($resultdoc)>= 1){
				while ($rowdoc=$resultdoc->fetch_assoc()) {
					echo "<tr><td>".$rowdoc["AppoID"]."</td><td>".$rowdoc["Date"]."</td><td>".$rowdoc["Time"]."</td><td>".$rowdoc["UserID"]."</td><td>".$rowdoc['Name']."</td><td>".$rowdoc['Email']."</td><td>".$rowdoc["ContactNumber"]."</td></tr>";
				}
			echo "</table>";
			}
		?>
	</table>

	<footer>
		<div>
			&copy Created by Sushanth M Dak
		</div>
	</footer>
</body>
</html>

