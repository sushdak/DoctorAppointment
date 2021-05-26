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
	<h1 style="margin-left:38%">Patients Information</h1>
	<table class="table4">
		<tr>
		<th>Patient ID</th>
		<th>Patient Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>Blood Group</th>

		</tr>

		<?php $sql3="SELECT  * FROM  patients " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["UserID"]."</td><td>".$row3["Name"]."</td><td>".$row3["Address"]."</td><td>".$row3["ContactNumber"]."</td><td>".$row3['Email']."</td><td>".$row3['Bloodtype']."</td></tr>";
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
