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