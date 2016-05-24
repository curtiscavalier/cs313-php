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
	if($result->num_row>0){
	while($row = $result->fetch_assoc()){
	echo "skills: ".$row[skills]."<br>";	
	}
	}
$conn->close();

?>
<body>
</body>
</html>