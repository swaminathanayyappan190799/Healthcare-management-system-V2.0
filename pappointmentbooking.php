<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Appointment bookings</title>
	<script type="text/javascript">
		function availableDoctors(s1,d1)
		{
          var s1 = document.getElementById(s1);
          var d1 = document.getElementById(d1);
          d1.innerHTML="";
          if(s1.value == "AllergyandImmunologist")
          {
          	var optionArray = ["|","Manoj|Manoj","Kumar|Kumar","Priya|Priya"];
          }
          else if(s1.value == "Dermatologist")
          {
            var optionArray = ["|","Anjali|Anjali","Sukumaran|Sukumaran","Anand|Anand"];
          }
           else if(s1.value == "Neurologist")
          {
          	var optionArray = ["|","Nithin|Nithin","Hariharan|Hariharan","Sudharsan Thirumalai|Sudharsan Thirumalai"];
          }
           else if(s1.value == "obsetriticsandgynecologist")
          {
          	var optionArray = ["|","Pradeepa|Pradeepa","Dhivya|Dhivya","Bhuvaneshwari|Bhuvaneshwari","Keerthana|Keerthana"];
          }
           else if(s1.value == "ophthalmologist")
          {
          	var optionArray = ["|","Swaminathan|Swaminathan","Rifakath Ali|Rifakath Ali","Seetharaman|Seetharaman","Sudharsan|Sudharsan"]
          }
           else if(s1.value == "pediatrician")
          {
          	var optionArray = ["|","Shruthi|Shruthi","Priyadharshini|Priyadharshini","Swetha|Swetha","Ramya|Ramya"];
          }
           else if(s1.value == "Physiatrist")
          {
          	var optionArray = ["|","Umesh charan|Umesh charan","Ram|Ram","Sheikh mohammed|Sheikh mohammed"];
          }
          for(var option in optionArray)
        {
        	var pair = optionArray[option].split("|");
        	var newOption = document.createElement("option");
        	newOption.value = pair[0];
        	newOption.innerHTML = pair[1];
        	d1.options.add(newOption);
        }
		}
	</script>
</head>
<body>
	<form action="pappoint.php" method="POST">
<center>
	<br>
	<br>
	<p1 style="font-family:cursive;"><center><strong>Enroll your details for booking an appointment to our doctors</strong></center></p1>
	<br>
	<hr>
	<br>
	Patient name          :
	<input type="text" name="patientname" id="patientname" required>
	<br>
	<br>
	Mobile number         :
	<input type="number" name="mobilenumber" id="mobilenumber" required>
	<br>
	<br>
	Email                 :
	<input type="email" name="email" id="email" required>
	<br>
	<br>
	choose specialization :
	<select name="specialization" id="specialization" onchange="availableDoctors(this.id,'ad')" required>
<option name=""></option>
<option value="AllergyandImmunologist" >Allergy and Immunologist</option>
<option value="Dermatologist" >Dermatologist</option>
<option value="Neurologist" >Neurologist</option>
<option value="obsetriticsandgynecologist">obsetritics and gynecologist</option>
<option value="ophthalmologist">ophthalmologist</option>
<option value="pediatrician">pediatrician</option>
<option value="Physiatrist">Physiatrist</option>
 </select>
 <br>
 <br>
     Booking Date        :
     <input type="date" name="Bdate" id="Bdate" required>
     <br>
     <br>
     Avaiable doctors    :
     <select name="ad" id="ad" required>
     </select>
     <br>
     <br>
     <hr>
     <br>
     <button>
     	submit
     </button>
 </form>
</center>
<form action="ppage2.php">
<button>
	Back
	</button>
</form>
</body>
</html>