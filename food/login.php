<?php
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}
?>
<html>
<head>
<link rel="stylesheet" href="./css/login.css">
<link rel="stylesheet" href="./css/nav1.css">
</head>
<body >
<div class="logo">
          <div class="tt" >
            <a href="index.php" style="color:black;font-size:200%;">D.F.L</a>
        </div>
          </div>
    
          <input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
          <label for="menu-icon"></label>
          <nav class="nav"> 		
              <ul class="pt-5">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="Donate.php">Donate</a></li>
                <li><a href="predict.php">Predict your Quality</a></li>
                <li><a href="Contact.php">Contact</a></li>
              </ul>
          </nav>
  <div class="login-wrap">
	<div class="login-html">
		<br><br> 
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" style="color: white;">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
              <form action="Connection_check.php" method="post" name="signin">
				<div class="group">
					<label for="user" class="label" style="color: black;">Username</label>
					<input id="user" type="text" name="username" class="input" onkeydown="keydownFunction('user')" onkeyup="keyupFunction('user')">
				</div>
				<div class="group">
					<label for="pass" class="label" style="color: black;">Password</label>
					<input id="pass" type="password" name="password" class="input" data-type="password" onkeydown="keydownFunction('pass')" onkeyup="keyupFunction('pass')">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon" style="color: black;"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input id="demo" type="submit" name="signin" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
           </form>
			</div>
			<div class="sign-up-htm">
            <form action="Connection_login.php" method="post" name="signup">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" name="username1" class="input" >
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="password1" class="input" data-type="password" onkeydown="keydownFunction('pass')" onkeyup="keyupFunction('pass')">
				</div>
				<div class="group">
					<label for="pass1" class="label">Repeat Password</label>
					<input id="pass1" type="password" name="cpassword1" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="email" class="label">Email Address</label>
					<input id="email" type="text" name="emaill" class="input">
				</div>
				<div class="group">
					<input id="demo1" type="submit"  name="signup" class="button" value="Sign Up" >
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
            </form>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<script>
	document.getElementById("demo").addEventListener("mouseover", mouseOver);
	document.getElementById("demo").addEventListener("mouseout", mouseOut);
	document.getElementById("demo1").addEventListener("mouseover", mouseOver);
	document.getElementById("demo1").addEventListener("mouseout", mouseOut);
	
	function mouseOver() {
		document.getElementById("demo").style.color = "purple";
		document.getElementById("demo").style.height = "64px";
		document.getElementById("demo").style.width = "100%";
		document.getElementById("demo1").style.color = "purple";
		document.getElementById("demo1").style.height = "64px";
		document.getElementById("demo1").style.width = "100%";
	}
	
	function mouseOut() {
		document.getElementById("demo").style.color = "white";
		document.getElementById("demo").style.height = "40px";
		document.getElementById("demo").style.width = "100%";
		document.getElementById("demo1").style.color = "white";
		document.getElementById("demo1").style.height = "45px";
		document.getElementById("demo1").style.width = "100%";

	}

	function keydownFunction(demo2) {
  	document.getElementById(demo2).style.backgroundColor = "lightgrey";
	}

	function keyupFunction(demo2) {
  document.getElementById(demo2).style.backgroundColor = "lightblue";
	}

	function myFunction() {
  alert("Page is loaded");
}

	</script>

</html>