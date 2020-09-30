<?php

session_start();

echo "Welcome \r\n Dr.".$_SESSION['username'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor panel</title>
</head>
<body>
<form action="dlogout.php" method="POST">
<br>
<button>
	logout
</button>
</form>
<hr>
<center>
	Click here to view the patient's consultation records :
	<br>
	<br>
	<form action="consultation.php">
	<button>
		Consultation records
	</button>
</form>
<br>
<br>
Click here to view patient appointments :
<br>
<br>
<form action="pappointtab.php">
<button>
	Appointments
</button>
</form>
</center>
</body>
</html>