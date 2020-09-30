<?php

session_start();

$con = mysqli_connect("localhost","root","","healthcare");

if(isset($_POST["login"]))

{
	$username = "administrator";
	$password = "ssss";
	if($_POST['username'] == $username && $_POST['password'] == $password)
	{
		$_SESSION['username']=$username;
		header("location:awindow1.php");
	}
	else
	{
		echo "your login credentials are incorrect";
		header("refresh:2; url=Mark_4.html");
		session_destroy();
		die();
	}
}

?>
