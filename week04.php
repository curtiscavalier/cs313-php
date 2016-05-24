<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Week04</title>
</head>

<?php
require('login.php');
$con=mysqli_connect("http://php-curtiscavalier.rhcloud.com/",$user,$password);
	mysqli_select_db($con, "skills");
	if(!$con){
	die('Could not connect: ' .mysql_error());	
	}
	$sql = "SELECT skills FROM SKills";
	$result = $conn->quert($sql);
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