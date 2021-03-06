<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Prescription panel with online booking</title>
	<script type="text/javascript">
    function prescription(d1,t1)
    {
       var d1 = document.getElementById(d1);
       var t1 = document.getElementById(t1);
       t1.innerHTML="";
       if(d1.value == "anxiety")
       {
          var optionArray = ["|","Citalopram|Citalopram","Fluoxetine|Fluoxetine","Paroxetine|Paroxetine","Vilazodone|Vilazodone"] ;
       }
       else if(d1.value == "diabetes")
       {
          var optionArray = ["|","glimepiride|glimepiride","insulin|insulin","lispro|lispro","glulisine|glulisine"] ;
       }
       else if(d1.value == "alzheimer")
       {
          var optionArray = ["|","Donepezil|donepezil","Memantine|Memantine"] ;
       }
       else if(d1.value == "Bloodpressure")
       {
          var optionArray = ["|","valsartan|valsartan","metoprolol|metoprolol","olmesartan|olmesartan"] ;
       }
       else if(d1.value == "arthiritis")
       {
          var optionArray = ["|","Plaquenil|Plaquenil","Arava|Arava","Trexall|Trexall","Azulfidine|Azulfidine"] ;
       }
       else if(d1.value == "asthma")
       {
          var optionArray = ["|","ProventilHFA|ProventilHFA","Xopenex|Xopenex","Metaproterenol|Metaproterenol","Terbutaline|Terbutaline"] ;
       }
       else if(d1.value == "coldandflu")
       {
          var optionArray = ["|","paracetemol|paracetemol","zyrcold|zyrcold","pyragesic|pyragesic","Azithral|Azithral"] ;
       }
       else if(d1.value == "undigestion")
       {
          var optionArray = ["|","Gelusil|gelusil","Prilosec|prilosec","Prevacid|prevacid","Protonix|protonix"] ;
       }
        for(var option in optionArray)
        {
        	var pair = optionArray[option].split("|");
        	var newOption = document.createElement("option");
        	newOption.value = pair[0];
        	newOption.innerHTML = pair[1];
        	t1.options.add(newOption);
        }
  }
	</script>
</head>
<body>
	<form action="ppresdb.php" method="POST">
	<br>
	<br>
	<p1 style="color:#A8F22E"><center><b>Get immediate prescriptions for your disease and get it delivered through booking !!</b></center></p1>
<br>
<hr>
<br>
<br>
<center>
	<p2 style="font-family:cursive;"><u>We are very consious about your health so kindly fill the below mentioned particulars</u></p2>
	<br>
	<br>
	<br>
	Name                        :
	<input type="text" name="name" required>
	<br>
	<br>          
	Age group                   :
	<select name="age">
		<option name="" value=""></option>
		<option name="1-15" value="1-15">1 - 15</option>
		<option name="15-25" value="15-25">15 - 25</option>
		<option name="25-40" value="25-40">25 - 40</option>
		<option name="above 50" value="above 50">above 50</option>
		</select>
		<br>
		<br> 
	Disease name                :
	<select name="Dname" id="Dname" onchange="prescription(this.id,'ptablet')" required>
		<option value""></option>
		<option value="anxiety">Anxiety</option>
		<option value="diabetes">Diabetes</option>
		<option value="alzheimer">Alzheimer</option>
		<option value="Bloodpressure">Blood pressure(BP)</option>
		<option value="arthiritis">Arthiritis</option>
		<option value="asthma">Asthma</option>
		<option value="coldandflu">Cold and flu</option>
		<option value="undigestion">undigenstion</option>
		</select>
  <br>
  <br>
     Symptoms                   :
     <input type="text" id="symptoms" name="symptoms" required>
     <br>
     <br>
     Prescribed tablets         :
     <select name="ptablet" id="ptablet" >
     </select>
     <br>
     <br>
     Select Dosage (mg)         :
     <select name="dosage" required>
     	<option value="" name=""></option>
     	<option value="10mg" name="10mg">10mg</option>
     	<option value="20mg" name="20mg">20mg</option>
     	<option value="50mg" name="50mg">50mg</option>
     	<option value="100mg" name="100mg">100mg</option>
     	<option value="120mg" name="120mg">120mg</option>
     </select>
     <br>
     <br>
     Select Period              :
     <select name="period" id="period" required>
     	<option value="" name=""></option>
     	<option value="1-2 weeks" name="1-2 weeks">1-2 weeks</option>
     	<option value="3-4 weeks" name="3-4 weeks">3-4 weeks</option>
     	<option value="more than one month" name="more than one month">more than one month</option>
     	</select> 
     	<br>
     	<br>
     Select date for delivery   :
     <input type="date" name="DFD" if="DFD" required>
     <br>
     <br>
     Time duration for delivery :
     <input type="time" name="TDFD" id="TDFD">
     <br>
     <br>
     Mode of payment            :
     <select name="MOP" required>
     	<option value="" name=""></option>
     	<option name="cashondelivery" value="cashondelivery">Cash On Delivery(COD)</option>
     	<option name="Online payment" value="Online payment">Online payment</option>
     </select>
     <br>
     <br>
     Address :
     <textarea name="address" required>
     </textarea>
     <br>
     <br>
     Mobile number :
     <input type="number" name="mnumber" id="mnumber" required>
     <br>
     <br>
     <br>
     <button>
     	Submit your request
     </button>
 </form>
 </center>
 <form action="pwindow.php">
 	<button>
 		Back 
 	</button>
 </form>
</body>
</html>