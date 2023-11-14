<html>
<head>
<link rel="stylesheet" href="./css/login.css">
<link rel="stylesheet" href="./css/nav.css">
<link rel="stylesheet" href="./css/donate.css">
</head>
<body >
<div class="logo">
          <div class="tt" >
            <a href="index.php" style="color:black;font-size:150%;">D.F.L</a>
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
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="image fit">
							<img src="./images/donate1.webp" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>DONATE</h2>
								<p>Add food details in the form mentioned below</p>
							</header>
							<hr />
							

							</p>
						</div>
					</div>
				</div>
				<div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="subject">Address</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

	<label for="points">Quantity:</label>
	<input type="number" id="points" name="points" step="1">

	<label for="food">Food Name</label>
    <input type="text" id="food" name="firstname" placeholder="Meals">
	<br>
	<p style="color: black;"> select the food type:</p>
	<input type="radio" id="veg" name="food" value="veg">
	<label for="veg">VEG</label><br>
	<input type="radio" id="nonveg" name="food" value="nonveg">
	<label for="nonveg">NON-VEG</label><br>
	<label for="source">Source</label>
    <input type="text" id="source" name="source" placeholder="eg:marraige">


	

    <br>
    <input type="submit" value="Submit">

     </form>
   </div>
			</section>




            <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>



        </body>

    </html>
