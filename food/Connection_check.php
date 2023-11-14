<?php
$xml = simplexml_load_file('signuup.xml');
if(isset($_POST["signin"]))
{
$username = $_POST['username'];
$pass = $_POST['password'];
foreach($xml->account as $datamember)
{
if($username == $datamember->name1 && $pass == $datamember->password)
{
    $Message1="logged in Successfully";
    header("Location:index.php?Message1=" . urlencode($Message1));
    break;
}
else{
    $Message="Wrong Credentials";
    header("Location: login.php?Message=" . urlencode($Message));
    break;
    }
}
}
?>
