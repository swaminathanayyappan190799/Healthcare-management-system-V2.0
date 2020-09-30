<?php
session_start();

echo "Welcome \r\n". $_SESSION['username'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient window</title>
</head>
<body>
	<br>
	<br>
<marquee behavior = alternate direction = "right" bgcolor="yellow"><font color="red">We are Warmly welcoming you to experience our services</font></marquee>
<br>
<br>
<hr>
<form action="plogout.php" method="POST">
<button>
	Logout
</button>
</form>
<center>
	<?php

    echo  "<br><a href='patup.php'><input type=button name=editprofile value=editprofile></a>";
	
	?>
<br>
<br>
<br>
<form action="pconsult.php">
<button>
 consult a doctor
</button>
</form>
<br>
<form action="pprescription.php">
<button>
	Ask for prescription 
</button>
<br>
<br>
<br>
<p1 style="font-family:cursive; font-size:15px;" text-align="right"><strong>(Note :</strong>The prescription tab will allows you to purchase your tablets through online)</p1>
</form>
</center>
<br>
<form action="ppage2.php">
<button button-align="right">
	Next page
</button>
</form>
<br>
<hr>
</body>
</html>