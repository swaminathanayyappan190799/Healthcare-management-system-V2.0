<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient consultation</title>
</head>
<body>
	<form action="pcondb.php" method="POST">
	<br>
	<br>
	<p1 style="color:violet;"><center><strong>Describe the below mentioned details to improve our services</strong></center></p1>
	<br>
	<br>
	<hr>
<center>
Name                              :
<input type="text" id="name" name="name" required>
<br>
<br>
Age                               :
<input type="number" id="age" name="age" required>
<br>
<br>
Gender                            :
<select name="gender">
	<option name=""></option>
	<option name="Male" value="Male">Male</option>
	<option name="Female" value="Female">Female</option>
	<option name="Transgender" value="Transgender">Transgender</option> 
</select> 
<br>
<br>
Marital Status                    :
<select name=mstatus>
	<option name=""></option>
	<option name="Married" value="Married">Married</option>
	<option name="Unmarried" value="Unmarried">Unmarried</option>
</select>
<br>
<br>
Disease and symptoms              :
<input type="text" name="disandsymptoms">
<br>
<br>
Affected area                     :
<input type="text" name="affectedarea">
<br>
<br>
Disease identified by[No.of days] :
<input type="number" name="identifieddays">
<br>
<br>
Treatment type                    :
<select name="treatmenttype">
	<option name=""></option>
	<option name="Hospitalbased" value="Hospitalbased">Hospital based </option>
	<option name="Homebased" value="Homebased">Home based </option>
</select>
<br>
<br>
Specialization of branch          :
<select name="specializeddoctor">
<option name=""></option>
<option name="AllergyandImmunologist" value="AllergyandImmunologist">Allergy and Immunologist</option>
<option name="Dermatologist" value="Dermatologist">Dermatologist</option>
<option name="Neurologist" value="Neurologist">Neurologist</option>
<option name="obsetriticsandgynecologist" value="obsetriticsandgynecologist">obsetritics and gynecologist</option>
<option name="ophthalmologist" value="ophthalmologist">ophthalmologist</option>
<option name="pediatrician" value="pediatrician">pediatrician</option>
<option name="Physiatrist" value="Physiatrist">Physiatrist</option>
</select>
<br>
<br>
Additional information           :
<textarea name="addinfo">
</textarea>
<br>
<hr>
<br>
<button>
	Submit
	</button>
</form>
</center>
<form action="pwindow.php">
<button>
	back
	</button>
</form>
</body>
</html>