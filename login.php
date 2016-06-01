<?php
	$con=mysqli_connect("www.secretvoice1.com","secretvo_11","c12345");
	mysqli_select_db($con, "secretvo_11");
	if(!$con){
	die('Could not connect: ' .mysql_error());
	}
	

	
	$statement = mysqli_prepare($con,"SELECT * FROM family");
	mysqli_stmt_bind_param($statement, "issiii",$person_id, $family_name,$given_name,$generation,$relation,$marriage_id);
	mysqli_stmt_execute($statement);
	
	mysqli_stmt_store_result($statement);
	
	mysqli_stmt_bind_result($statement,$person_id,$family_name,$given_name,$generation,$relation,$marriage_id);
	$id = array();
	$fn = array();
	$gn = array();
	$gen = array();
	$re = array();
	$marriage = array();
	while (mysqli_stmt_fetch($statement)) {
		array_push($id,$person_id);
		array_push($fn,$family_name);
		array_push($gn,$given_name);
		array_push($gen,$generation);
		array_push($re,$relation);
		array_push($marriage,$marriage_id);
	}
	
	
	mysqli_stmt_close($statement);
	mysqli_close($con);
?>