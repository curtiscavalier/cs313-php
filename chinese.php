<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Chinese</title>
</head>
<?php

	if(isset($_POST["person_id"]))
	{
		$data = $_POST["person_id"];
	}
	$statement = mysqli_prepare($con,"SELECT * FROM person_name WHERE person_id = ".$data);
	echo $statement;
		mysqli_stmt_bind_param($statement, "iiss",$person_name_id, $person_id,$family_name,$given_name);
		mysqli_stmt_execute($statement);
		
		mysqli_stmt_store_result($statement);
		
		mysqli_stmt_bind_result($statement,$person_name_id, $person_id,$family_name,$given_name);
		$profile = array();
		while (mysqli_stmt_fetch($statement)) {
			$profile["person_id"] = $person_id;
			$profile["family_name"] = $family_name;
			$profile["given_name"] = $given_name;
		}
	echo $profile["person_id"];
		mysqli_stmt_close($statement);
		mysqli_close($con);	
?>
<body>
<form >
<input type = "hidden" name = "person_id" value = "<?php echo $profile["person_id"] ?>">
  First name:<br>
  <input type="text" name="firstname" value="<?php echo $profile["given_name"]?>">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="<?php echo $profile["family_name"]?>">
  <br>
  
  <input type="submit" value="Submit">
</form> 
</body>
</html>