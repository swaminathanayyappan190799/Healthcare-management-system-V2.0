<html>
<head>
<title>Updation of records</title>
</head>
<body>
<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$con=mysqli_connect('localhost','root','');
 
	mysqli_select_db($con,'healthcare');

	$sql = "select firstname,lastname,dateofbirth,email,city,zipcode,state,country,mobilenumber,gender,username,password from patient at where email='$email' && password='$password' ";

	$patient=mysqli_query($con,$sql);  
	?>
		<?php
		if($row=mysqli_fetch_array($patient))
		{
			echo"<table>";
			echo"<tr>";
			echo"<th>firstname</th>";
			echo"<th>lastname</th>";
			echo"<th>dateofbirth</th>";
			echo"<th>email</th>";
			echo"<th>city</th>";
			echo"<th>zipcode</th>";
			echo"<th>state</th>";
			echo"<th>country</th>";
			echo"<th>mobilenumber</th>";
			echo"<th>gender</th>";
			echo"<th>username</th>";
			echo"<th>password</th>";
		    echo"</tr>";
			echo"<tr><form action=update.php method=post>";
			echo "<td><input type=text name=firstname value='".$row['firstname']."'></td>";
		    echo "<td><input type=text name=lastname value='".$row['lastname']."'></td>";
     		echo "<td><input type=date name=dateofbirth value='".$row['dateofbirth']."'></td>";
            echo "<td><input type=text name=email value='".$row['email']."'></td>";
            echo "<td><input type=text name=city value='".$row['city']."'></td>";
   			echo "<td><input type=number name=zipcode value='".$row['zipcode']."'></td>";
 			echo "<td><input type=text name=state value='".$row['state']."'></td>";
			echo "<td><input type=text name=country value='".$row['country']."'></td>";
			echo "<td><input type=number name=mobilenumber value='".$row['mobilenumber']."'></td>";
			echo "<td><input type=text name=gender value='".$row['gender']."'></td>";
			echo "<td><input type=text name=username value='".$row['username']."'></td>";
			echo "<td><input type=password name=password value='".$row['password']."'></td>";
			echo"<td><input type=submit>";
            echo"</form></tr>";
            echo  "<br><a href='pwindow.php'><input type=button name=abort updation value=abort updation></a>";
		}
		else
		{
			echo "Oops something went wrong it seems like your username or password that you have entered is incorrect you are not allowed to perform your updation of records !";
			header("refresh:7;url=pwindow.php");
		}
?>
</body>
</html>
