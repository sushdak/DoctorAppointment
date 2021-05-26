<?php include '../../datalayer/bookserver.php'; ?>
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
	<h1 style="margin-left:40%"> Appointments </h1>
	<table class="table4">
		<tr>
		<th>Appointments ID</th>
		<th>Doctor ID</th>
		<th>Patient ID</th>
		<th>Date</th>
		<th>Time</th>


		</tr>
		<?php $sql3="SELECT  * FROM  bookapp " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["docID"]."</td><td>".$row3["patientID"]."</td><td>".$row3["Date"]."</td><td>".$row3['Time']."</td></tr>";
			}


			echo "</table";



		}

		?>

	</table>

	<br><br><br><br>
	<footer>
		<div>
			&copy Created by Sushanth M Dak
		</div>
	</footer>

</body>
</html>
