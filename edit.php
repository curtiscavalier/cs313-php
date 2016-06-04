<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit</title>
</head>

<body>
<?php
	
	if(isset($_GET["data"]))
	{
		$data = $_GET["data"];
	}
	require('getRow.php');
	
?>
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
  Marriage:<br>
  <input type="text" name="marriage" value= "<?php echo $profile["marriage"] ?>">
  <br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>