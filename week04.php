<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Week04</title>
</head>
<p>hi</p>
<?php
require('login.php');

	$sql = "SELECT Skills FROM Skills";
	$result = mysql_quert($sql,$con);
	if(!result){
	die("couldn't ".mysql_error());	
	}
	while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
	echo "aa";	
	}
$conn->close();

?>
<body>
</body>
</html>