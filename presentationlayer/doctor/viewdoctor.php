<?php include ('../../datalayer/server.php'); ?>
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

	<div class="headerA">
	<h2>My Information</h2>
</div>

<form method="post" action="viewdoctor.php" class="info">





<div class="Dcontent">


	<label>ID: <?php echo "" .$_SESSION['DoctorID'];?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $colD['email']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $colD['Doctorname']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Address : <?php echo $colD['Address']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $colD['ContactNumber']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Specialized In : <?php echo $colD['categorey']; ?></label>
	 	   	 	   <br>
	 	   <br>








</div>








</form>







<br><br><br>


	<footer>
		<div>
			&copy Created by Sushanth M Dak
		</div>
	</footer>




</body>
</html>
