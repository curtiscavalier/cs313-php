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
<input type = "hidden" name = "person_id" value = "<?php $data ?>">
  First name:<br>
  <input type="text" name="firstname" value="<?php echo $gn[$data]?>">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="<?php echo $fn[$data]?>">
  <br>
  relationship with(number):<br>
  <input type="text" name="relationship" value="">
  <br>
  Generation:<br>
  <input type="text" name="generation" value="">
  <br>
  Marriage:<br>
  <input type="text" name="lastname" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>