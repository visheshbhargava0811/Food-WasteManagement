<?php
$xmldoc = simplexml_load_file("homepage.xml");
$message = "
<html>
<title>.$xmldoc->title.</title>
<style>
p{
    border:8px solid lightblue;
    box-sizing: content-box;
    padding: 2px;
    word-spacing: 2pt;
}
</style>
<body>
<p>$xmldoc->para</p>
</body>
</html>
";

echo $message;

?>
