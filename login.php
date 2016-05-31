<?php
	$con=mysqli_connect("www.secretvoice1.com","secretvo_11","c12345");
	mysqli_select_db($con, "secretvo_11");
	echo "hi";
	if(!$con){
	die('Could not connect: ' .mysql_error());
	}
	

	
	$statement = mysqli_prepare($con,"SELECT * FROM family");
	mysqli_stmt_bind_param($statement, "issi",$person_id, $family_name,$given_name,$generation);
	mysqli_stmt_execute($statement);
	
	mysqli_stmt_store_result($statement);
	
	mysqli_stmt_bind_result($statement,$person_id,$family_name,$given_name,$generation);
	$id = array();
	$fn = array();
	$gn = array();
	$gen = array();
	$count = 0;
	while (mysqli_stmt_fetch($statement)) {
		$id["person_id"] = $person_id;
		echo "this is count : ".$person_id;
	}
	
	echo "This is count 0; ".$id[0];
	
	mysqli_stmt_close($statement);
	mysqli_close($con);
?>