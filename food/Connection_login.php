<?php
$xmldoc=new DOMDocument("1.0","UTF-8");
$xmldoc->formatOutput = true;
$xmldoc->preserveWhiteSpace = false;
$xmldoc -> load('signuup.xml');
if(!$xmldoc)
{
$signup = $xmldoc->createElement("signup");
$xmldoc->appendChild($signup);
}
else{
$signup = $xmldoc->firstChild;
}
if(isset($_POST['signup']))
{
$name1 = $_POST['username1'];
$pas = $_POST['password1'];
$cpas = $_POST['cpassword1'];
$emaill = $_POST['emaill'];
$d=$xmldoc->createElement("account");
$signup->appendChild($d);
$fn = $xmldoc->createElement("name1",$name1);
$d->appendChild($fn);
$ln = $xmldoc->createElement("password",$pas );
$d->appendChild($ln);
$cln = $xmldoc->createElement("cpassword",$cpas);
$d->appendChild($cln);
$em = $xmldoc->createElement("email",$emaill);
$d->appendChild($em);
echo"<xmp>".$xmldoc->saveXML()."</xmp>";
$xmldoc->save("signuup.xml");
}
?>