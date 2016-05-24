<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Week04</title>
</head>
<p>hi</p>
<?php
require('login.php');

	$comments = mysql_query("SELECT * FROM Skills");
	if(!comment){
		echo "you can't ";
	
	}
	$row = mysql_fetch_row($comment);
	print_r($row);
$conn->close();

?>
<body>
</body>
</html>