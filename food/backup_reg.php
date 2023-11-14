<?php

  
// Server name must be localhost
$servername = "localhost";
  
// In my case, user name will be root
$username = "root";
  
// Password is empty
$password = "root";
$databasename="db";
  
// Creating a connection
$conn = new mysqli($servername, $username, $password, $databasename);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failure: " . $conn->connect_error);
} 

 


if (isset($_POST['submit'])) {
$name1 = mysqli_real_escape_string($conn, $_POST['name1']);
$reg = mysqli_real_escape_string($conn, $_POST['reg']);
$phn = mysqli_real_escape_string($conn, $_POST['phn']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
$addr = mysqli_real_escape_string($conn, $_POST['addr']);
$sib = mysqli_real_escape_string($conn, $_POST['sib']);
$name2 = mysqli_real_escape_string($conn, $_POST['name2']);
$reg2 = mysqli_real_escape_string($conn, $_POST['reg2']);
$year1 = mysqli_real_escape_string($conn, $_POST['year1']);
$acc = mysqli_real_escape_string($conn, $_POST['acc']);
$gym = mysqli_real_escape_string($conn, $_POST['gym']);
$swim = mysqli_real_escape_string($conn, $_POST['swim']);
$bat = mysqli_real_escape_string($conn, $_POST['bat']);





if(mysqli_query($conn, "INSERT INTO users(name1,reg,phn, email,gender,nationality,addr,sib,name2,reg2, year1,acc,gym,swim,bat ) VALUES('" . $name1 . "','" . $reg . "','" . $phn . "','" . $email . "','" . $gender . "','" . $nationality . "','" . $addr . "','" . $sib . "','" . $name2 . "','" . $reg2 . "','" . $year1 . "','" . $acc . "','" . $gym . "','" . $swim . "','" . $bat . "')")) {
echo "SUCCESSFULLY REGISTERED";
exit();
} else {
echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
}
?>


<?php
session_start();
?>






<?php
$xmldoc=new DOMDocument("1.0","UTF-8");
$xmldoc->formatOutput = true;
$xmldoc->preserveWhiteSpace = false;
$xmldoc -> load('sin.xml');
if(!$xmldoc)
{
$signup = $xmldoc->createElement("signup");
$xmldoc->appendChild($signup);
}
else{
$signup = $xmldoc->firstChild;
}
if(isset($_POST['submit']))
{
$name1 = $_POST['name1'];
$reg = $_POST['reg'];
$uni = $_POST['uni'];
$phn = $_POST['phn'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$addr = $_POST['addr'];
$d=$xmldoc->createElement("account");
$signup->appendChild($d);
$fn = $xmldoc->createElement("name1",$name1);
$d->appendChild($fn);
$ln = $xmldoc->createElement("reg",$reg );
$d->appendChild($ln);
$re = $xmldoc->createElement("reg",$reg );
$d->appendChild($re);
$un = $xmldoc->createElement("university",$uni );
$d->appendChild($un);
$ph = $xmldoc->createElement("phone",$phn );
$d->appendChild($ph);
$em = $xmldoc->createElement("email", $email);
$d->appendChild($em);
$ge = $xmldoc->createElement("gender",$gender);
$d->appendChild($ge);
$na = $xmldoc->createElement("nationality",$nationality);
$d->appendChild($na);
$ad= $xmldoc->createElement("address",$addr);
$d->appendChild($ad);
echo"<xmp>".$xmldoc->saveXML()."</xmp>";
$xmldoc->save("sin.xml");
}
?>







