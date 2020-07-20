<!DOCTYPE html PUBLIC "-//W3C//DTD//XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtmll/DTD/xhtmll-tansitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Tyoe" content="text/html; charset=utf-8"/>
<title>Employee Info</title>
<link href="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
	<div class="jumbotron">
<?php
echo "<h5>Hello ".$_POST["fn"]."</h5><h4> Of ".$_POST["gen"]." Gender </h4>"."<br/><br/> You have a message <h1>".$_POST["sms"]."</h1> <h2>And he is my".."</h2>"


?>
</div>
</body>
</html>