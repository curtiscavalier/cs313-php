<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Week04</title>
</head>
<p>Below are my skills as a software engineer</p>
<?php
require('login.php');


	$statement = mysqli_prepare($con,"SELECT * FROM Skills");
	mysqli_stmt_bind_param($statement);
	mysqli_stmt_execute($statement);
	
	mysqli_stmt_store_result($statement);
	
	mysqli_stmt_bind_result($statement,$id,$Skills);
	$profile = array();
	while (mysqli_stmt_fetch($statement)) {
		echo $id." : ";
		
		echo $Skills;
		echo "</br>";
	
	}
	mysqli_stmt_close($statement);
	mysqli_close($con);

?>
<body>
</body>
</html>