
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.

if (isset($_POST['signin'])){
    // username and password sent from form 
    
    $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `signup` WHERE username='$username'
and password1='$password'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
			echo "LOGIN SUCCESSFUL";
	
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    
			header("Location: success.php");
         }
         else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
 }

if (isset($_POST['signup'])){
$name = mysqli_real_escape_string($conn, $_POST['username1']);
$password = mysqli_real_escape_string($conn, $_POST['password1']);
$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword1']); 
$email = mysqli_real_escape_string($conn, $_POST['emaill']);

if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
$name_error = "Name must contain only alphabets and space";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($password) < 6) {
$password_error = "Password must be minimum of 6 characters";
}  
if($password != $cpassword) {
$cpassword_error = "Password and Confirm Password doesn't match";
}
if(mysqli_query($conn, "INSERT INTO signup(username, password1,email) VALUES('" . $name . "',  '" . $password . "','" . $email . "')")) {
header("location: login.php");
exit();
} else {
echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
}
?>





<?php  
setcookie("user", "back to home page");  
?>  
<html>  
<body>  
<?php  
if(!isset($_COOKIE["user"])) {  
    echo "hellooo!";  
} else {  
    echo  $_COOKIE["user"];  
}  
?>

