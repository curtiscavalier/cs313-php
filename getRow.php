<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<?php
$con=mysqli_connect("www.secretvoice1.com","secretvo_11","c12345");
	mysqli_select_db($con, "secretvo_11");
	if(!$con){
	die('Could not connect: ' .mysql_error());
	}
	

	
	$statement = mysqli_prepare($con,"SELECT * FROM family WHERE person_id = '".$data."'");
	mysqli_stmt_bind_param($statement, "issiii",$person_id, $family_name,$given_name,$generation,$relation,$marriage_id);
	mysqli_stmt_execute($statement);
	
	mysqli_stmt_store_result($statement);
	
	mysqli_stmt_bind_result($statement,$person_id,$family_name,$given_name,$generation,$relation,$marriage_id);
	$profile = array();
	while (mysqli_stmt_fetch($statement)) {
		$profile["person_id"] = $person_id;
		$profile["family_name"] = $family_name;
		$profile["given_name"] = $given_name;
		$profile["$gen"] = $gen;
		$profile["re"] = $relation;
		$profile["marriage"] = $marriage_id;
	}
	echo $profile["person_id"];
?>
<body>
</body>
</html>