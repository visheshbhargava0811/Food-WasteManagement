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
  <?php
if (isset($_GET['Message1'])) {
  print '<script type="text/javascript">alert("' . $_GET['Message1'] . '");</script>';
}
?>
</body>  
</html>  

<!DOCTYPE html>
<!-- Created By CodeWithNepal - www.codewithnepal.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------<title>Business Website Design | CodeWithNepal</title>------>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/stylez.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <?php
    setcookie ("user", "", time() - 10);// set the expiration date to one hour ago  
    ?>
   </head>
<body>
  <div>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">Uplink</a>
      </div>
    <div class="head2">
      <ul class="list">
      <li><div class="cl"><a href="index.php">Home</a></div></li>
	<li><div class="cl"><a href="register.php">Register</a></div></li>
	<li><div class="cl"><a href="login.php">Login</a></div></li>
  <li><div class="cl"><a href="Donate.html">Donate</a></div></li>
  <li><div class="cl"><a href="predict.html">Predict Your Quality</a></div></li>
  <li><div class="cl"><a href="contact.html">Contact Us</a></div></li>
      </ul>
    </div>
    </div>
  </div>
  </nav>
      </ul>
    </div>
  </nav>
         
    
    <div class="bbody">
        
    
    <form action="Connection.php" method="post" onsubmit="return validateform()">
   
    <br>
    <br>
    <p style="text-align: center;font-size: 20px;"><b> REGISTRATION FORM FOR HOSTEL<br>(only for computer science students)</b></p>
    <fieldset style="margin-left: 5px;margin-right: 5px;">
    <legend><strong>REGISTRATION FORM</strong></legend>
    <label for="name1">Name :</label>
    <input type="text" size="15" id="name1" name="name1" placeholder="Your Name" ><br><br>
    <label >Reg No :</label>
    <input type="text"size="15" id="reg" name="reg" placeholder="2XBCIXXXX" /><br><br>
    <label>University Name :</label>
    <input type="text" size="15" id="uni" name="uni" value="VIT Vellore" readonly><br><br>
    <label for="phn">Phone :</label>
    <input type="text" id="phn" name="phn"  size="15"placeholder="91+XXXXXXXXXX" maxlength="10" /><br><br>
    <br>
    <label for="email">Email :</label>
    <input type="text" id="email" name="email" placeholder="example@gmail.com" /><br><br>
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
    <textarea cols="50"rows="5" name="addr"></textarea>
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
    <input type="text"size="15"placeholder="Sibling's Name"/><br><br>
    <label>Reg No :</label>
    <input type="text"size="15"placeholder="20BCIXXXX"/><br><br>
    <label>PassoutYear :
    <select id="Year" name="Year" multiple size="5" onchange="myFunction()">
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
    <label for="accommodation">Choose :</label>
    <select name="type" id="accommodation" required>
    <option value="days scholar">Days Scholar</option>
    <option value="hosteller">Hosteller</option>
    </select>
    <br><br>
    <label>Facilities Required :</label><br>
    <input type="checkbox" id="Gym" value="Gym">
    <label for="Gym">Want Gym</label><br>
    <input type="checkbox" id="Swimming" value="Swimming">
    <label for="Swimming">Book Swimming pool</label><br>
    <input type="checkbox" id="Batminton" value="Batminton">
    <label for="Batminton">Book Batminton court</label>
    <br><br>
    <input type="submit" value="submit" name="submit">
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