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
$con=mysqli_connect("www.secretvoice1.com","secretvo_11","c12345");
	mysqli_select_db($con, "secretvo_11");
	if(!$con){
	die('Could not connect: ' .mysql_error());
	}
	

	if(isset($_POST["person_id"]))
	{
		$data = $_POST["person_id"];
	}
	require('getRow.php');
	$statement = mysqli_prepare($con,"SELECT * 
	FROM person_name
	JOIN family ON family.person_id = ".$data."
	WHERE person_name.person_id = family.person_id");
	mysqli_stmt_bind_param($statement, "issiii",$person_id, $family_name,$given_name,$generation,$relation,$marriage_id);
	mysqli_stmt_execute($statement);
	
	mysqli_stmt_store_result($statement);
	
	mysqli_stmt_bind_result($statement,$person_id,$family_name,$given_name,$generation,$relation,$marriage_id);
	$profile = array();
while (mysqli_stmt_fetch($statement)) {
		$profile["person_id"] = $person_id;
		$profile["family_name"] = $family_name;
		$profile["given_name"] = $given_name;
		$profile["gen"] = $generation;
		$profile["re"] = $relation;
		$profile["marriage"] = $marriage_id;
	}
	
	mysqli_stmt_close($statement);
	mysqli_close($con);
?>
<body>
<form action="update.php" method = "post">
<input type = "hidden" name = "person_id" value = "<?php echo $profile["person_id"] ?>">
  First name:<br>
  <input type="text" name="firstname" value="<?php echo $profile["given_name"]?>">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="<?php echo $profile["family_name"]?>">
  <br>
  relationship with(number):<br>
  <input type="text" name="relationship" value = "<?php echo $profile["re"]?>">
  <br>
  Generation:<br>
  <input type="text" name="generation" value= "<?php echo $profile["gen"] ?>">
  <br>
  This person is married to:<br>
  <input type="text" name="marriage" value= "<?php echo $profile["marriage"] ?>">
  <br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>