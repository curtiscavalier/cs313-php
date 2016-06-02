<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit</title>
</head>

<body>
<?php
	require('login.php');
	if(isset($_GET["data"]))
	{
		$data = $_GET["data"];
	}
	
?>
<form action="action_page.php">
  First name:<br>
  <input type="text" name="firstname" value="<?php $gn[$data]?>">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="<?php $fn[$data]?>">
  <br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>