<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient update authentication page</title>
</head>
<body background-color="yellow">
	<form action="up.php" method="post">
<center>
	<br>
	<h1 style="font-family:cursive; color:blue;">Welcome for patient record updation</h1>
	<br>
	<h2 style="color:red;">Kindly fill out the below details in order to update your records</h2>
	<br>
	<br>
	<hr>
    <br>
   email : 
   <input type="text" name="email" id="email"> 
<br>
<br>
password:
<input type="password" name="password" id="password">
<br>
<br>
<button>
	proceed to updation
</button>
</form>
<br>
<br>
<form action="pwindow.php">
<button>
	back to panel
</button>
</form>
</center>
<br>
<br>
<p1><strong>Note :</strong>Be cautious while entering the email and password such that if you have entered wrong email or password means you cannot able to perform your account updation and it will return an error message !</p1>
<br>
<br>
<hr> 
</center>
</body>
</html>