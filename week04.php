<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Week04</title>
</head>

<?php
require('login.php');

	$sql = "SELECT skills FROM Skills";
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