<?php include ('../../datalayer/server.php'); ?>
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

<body >
		<div class="headerP">
	<h2>My Information</h2>
</div>



<form method="post" action="index.php"  class="info">





<div class="contentP" style="font-weight: bold;">



	<label>ID: <?php echo "" .$_SESSION['UserID'];?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $col['Email']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $col['Name']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Address : <?php echo $col['Address']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $col['ContactNumber']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Blood Type : <?php echo $col['Bloodtype']; ?></label>
	 	   	 	   <br>
	 	   <br>


	 	   </div>




</form>


	<footer>
		<div>
			&copy Created by Sushanth M Dak
		</div>
	</footer>



</body>
</html>

<!--<?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php

                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        $Patientsearch = mysqli_real_escape_string($mysqli,$_POST['Patientsearch']);

	$query="SELECT * FROM patients WHERE UserID=('$Patientsearch')";
	$result2=mysqli_query($mysqli,$query);-->


       <!--information of the user logged in -->
        <!-- welcome message for the logged in user -->
