<DOCTYPE !html>
<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" href="./css/style2.css">
<script src="./js/js.js"></script>
</head>

<style>
.bbody{
	background-color: rgb(211, 211, 211);
	background-repeat:no-repeat;
	height:max-content;
  	background-position: center;
  	background-size:cover;
	background-attachment:fixed;
}


</style>
<nav>
    <div class="menu">
      <div class="logo">
        <a href="#">Uplink</a>
      </div>
      <ul>
      <li><a href="index.php">Home</a></li>
	<li><a href="register.php">Register</a></li>
	<li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </nav>

	 

<div class="bbody">
	

<form action="Connection.php" method="post" onsubmit="return validateform()">

	<br>
	<br>
	<p style="text-align: center;font-size: 20px;"><b> REGISTRATION FORM FOR HOSTEL</b></p>
<fieldset style="margin-left: 5px;margin-right: 5px;">
<legend><strong>REGISTRATION FORM</strong></legend></strong>
<label for="name1">Name :</label>
<input type="text"size="15" id="name1" name="name1" placeholder="Your Name" /><br><br>

<label >Reg No :</label>
<input type="text"size="15" name="reg" placeholder="2XBCIXXXX" /><br><br>
<label>University Name :</label>
<input type="text" size="15"value="VIT Vellore" readonly><br><br>
<label for="phn">Phone :</label>
<input type="text" id="phn" name="phn"  size="15"placeholder="91+XXXXXXXXXX" maxlength="10"
/><br><br>
<br>
<label for="email"><b>Email</b></label>
<input type="email" id="email" name="email" placeholder="example@gmail.com"/><br><br>
Gender :
<input type="radio"name="gender" checked>Female
<input type="radio"name="gender">Male
<input type="radio"name="gender">Other
<br><br>
<label for="nationality">Choose your Nationality :</label>
<input list="Nationality" id="nationality" name="nationality" >
<datalist id="Nationality">
<option value="Indian">
<option value="NRI">
</datalist>
<br><br>
Address :
<textarea name="addr" cols="50"rows="5"/></textarea>
<br><br>
Do you have any siblings who study in this university ?
<input type="radio"name="sib" checked>Yes
<input type="radio"name="sib">No
<br><br>
If yes fill the below details about your sibling else simply ignore them
<br><br>
Note : If more than one sibling studies in this university then
just fill the details of the sibling <br>who is still studying or passed out
from college recently
<br><br>
<hr>
<fieldset>
<legend><strong>Sibling Details</strong></legend>
<label>Name :</label>
<input type="text"size="15" name="name2" placeholder="Sibling's Name"/><br><br>
<label>Reg No :</label>
<input type="text"size="15" name="reg2" placeholder="20BCIXXXX"/><br><br>
<label>PassoutYear :
<select id="year1" name="year1" multiple size="5" onchange="myFunction()">
<optgroup label="Passing out">
<option value="2027">2027</option>
<option value="2026">2026</option>
<option value="2025">2025</option>
<option value="2024">2024</option>
<option value="2023">2023</option>
</optgroup>
<optgroup label="Passed out">
<option value="2022">2022</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
</optgroup>
</select>
</label>
<p id="demo"></p>
<br><br>
</fieldset>
<hr>
<br>
<label for="acc">Choose :</label>
<select name="acc" id="acc" required>
<option value="days scholar">Days Scholar</option>
<option value="hosteller">Hosteller</option>
</select>
<br><br>
<label>Facilities Required :</label><br>
<input type="checkbox" id="gym" value="gym" name="gym">
<label for="gym">Want Gym</label><br>
<input type="checkbox" id="swim" value="swim" name="swim">
<label for="swim">Book Swimming pool</label><br>
<input type="checkbox" id="bat" value="bat" name="bat">
<label for="bat">Book Batminton court</label>
<br><br>

<input type="submit" value="submit" name="submit" >
<input type="reset" value="Reset">
</form>
</div>
<script>
      function myFunction() {
      var x = document.getElementById("Year").value;
      document.getElementById("demo").innerHTML = "You selected: " + x;
     }
</script>
</body>
</html>










