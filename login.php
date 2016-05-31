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
	$profile = array();
	while ($result = mysqli_stmt_fetch($statement)) {
		$profile = $person_id;
	}
	echo $profile;
	//echo json_encode($profile);
	mysqli_stmt_close($statement);
	mysqli_close($con);
?>