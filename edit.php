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
  This person is married to:<br>
  <input type="text" name="marriage" value= "<?php echo $profile["marriage"] ?>">
  <br><br>
  <input type="submit" value="Submit">
</form> 
<form action = "chinese.php" method = "post">
<input type = "hidden" name = "person_id" value = "<?php echo $profile["person_id"] ?>">
<input type="submit" value="Look at a different language">
</form>
<form action = "delete.php" method = "post">
<input type = "hidden" name = "person_id" value = "<?php echo $profile["person_id"] ?>">
<input type="submit" value="delete this person">
</form>
</body>
</html>