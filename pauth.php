<?php

session_start();

$con = mysqli_connect("localhost","root","","healthcare");

if(isset($_POST["login"]))

{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = mysqli_query($con,"select * from patient at where username = '$username' && password = '$password'")or die("Failed to query database".mysql_error());
	$rowcount = mysqli_num_rows($query);
	if($rowcount==true)
	{
		$_SESSION['username']=$username;
		header("location:pwindow.php");
	}
	else
	{
		echo "your login credentials are incorrect";
		header("refresh:1;url=Mark_1.html");
		session_destroy();
		die();
	}
}

?>
