<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient feedback</title>
</head>
<body>
	<form action="pfeeddbcon.php" method="POST">
<br>
<br>
<center>
<p1 style="color:#2E6FF2;">Give us your feedback about our services and for improvement of our services</p1>
<br>
<br>
<hr>
<br>
<br>
Name  :
<input type="text" name="name" id="name" required>
<br>
<br>
Mobile number :
<input type="number" id="mnumber" name="mnumber" required>
<br>
<br>
Email :
<input type="Email" id="email" name="email" required>
<br>
<br>
visitor type :
<select name="vtype">
	<option name="" id=""></option>
	<option name="patient" id="patient" value="patient">Patient</option>
	<option name="Relative/career" id="Relative/career" value="Relative/career">Relative/Career</option>
	<option name="Health professional" id="Health professional" value="Health professional">Health Professional</option>
	<option name="Web visitor" id="Web visitor" value="Web visitor">Web visitor</option>
</select>
<br>
<br>
Let us know what you think about our care :
<input type="radio" name="opinion" value="liked">Liked
<input type="radio" name="opinion" value="Not liked">Not liked
<input type="radio" name="opinion" value="Need to improve">Need to improve
<br>
<br>
If any others kindly specify in this column :
<textarea name="tfeed">
</textarea>
<br>
<br>
<br>
<button>
	Submit
</button>
</form>
</center>
<form action="ppage2.php">
<button>
	Back 
</button>
<hr>
</body>
</html>